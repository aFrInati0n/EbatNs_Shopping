<?php
// $Id: EbatNs_ComplexType.php,v 1.4 2008-07-09 11:51:18 michael Exp $
// $Log: EbatNs_ComplexType.php,v $
// Revision 1.4  2008-07-09 11:51:18  michael
// switched back to get_class
//
// Revision 1.3  2008/07/09 11:41:48  michael
// improved type guessing for flattened array element names
//
// Revision 1.2  2008/06/05 08:21:06  michael
// Initial PHP5
//

require_once 'EbatNs_SimpleType.php';

class EbatNs_ComplexType extends EbatNs_SimpleType
{ 
	// an array of SimpleTypes / ComplexTypes  (child-elements)
	public $_elements = array(); 
	// will define wheather the data is stored in the value-field (as a assoc array)
	// or either in Members of an object
	protected $_dataInValueArray = false;

	function __construct( $name, $nsURI )
	{
		parent::__construct($name, $nsURI);
	} 
	
	// will serialize the given value
	// and return XML-data.
	// give preserveNull = true to enforce serialization of values that evaluate to false (null or 0 or '')
	// we assume a value also as empty if the any child elements will not return any data.
	function serialize( $elementName, $value, $attributeValues, $preserveNull, $typeName, $dataConverter )
	{ 
		$ret = '';
		// lets decide where we are getting the data from
		if ( $this->_dataInValueArray )
		{
			$ret = '';
			foreach ( $value as $key => $data )
			{
				if ( isset( $data->attributeValues ) )
					$attributeValues = $data->attributeValues;
				else
					$attributeValues = null;

				if ( $data instanceof EbatNs_SimpleType )
				{
					$ret .= $data->serialize( $key, $data, $attributeValues, $preserveNull, null, $dataConverter );
				} 
				else
					$ret .= EbatNs_SimpleType::serialize( $key, $data, $attributeValues, $preserveNull, null, $dataConverter );
			} 
		} 
		else
		{
			if ( count( $this->_elements ) == 0 )
			{
				$ret = $this->value;
			} 
			else
				foreach ( $this->_elements as $childElementName => $childTypeInfo )
			{
				$childValue = $this->
				{
					$childElementName} ;
				if ( isset( $childTypeInfo['type'] ) )
					$childType = $childTypeInfo['type'];
				else
					$childType = null;

				if ( is_array( $childValue ) )
				{
					$needArraySurrounding = null;
					foreach ( $childValue as $arrayElementValue )
					{
						if ( isset( $arrayElementValue->attributeValues ) )
							$childAttributeValues = $arrayElementValue->attributeValues;
						else
							$childAttributeValues = null;

						if ( $childValue instanceof  EbatNs_SimpleType )
						{ 
							$ret .= $childValue->serialize( $childElementName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter ); 
						} 
						else
						{ 
							if (is_object($arrayElementValue))
							{
								// hack to guess the original element name out of
								// the class-name of the array-element
								if (!$childTypeInfo['array'])
								{
									list($questedName) = split('Type', get_class($arrayElementValue));
									$needArraySurrounding = $childElementName;	 
									$ret .= $arrayElementValue->serialize( $questedName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter ) ;
								}
								else
								{
									$ret .= $arrayElementValue->serialize( $childElementName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter );
								}
							}
							else
								$ret .= EbatNs_SimpleType::serialize( $childElementName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter );
						} 
					}
					
					if ($needArraySurrounding !== null)
					{
						$ret = '<' . $needArraySurrounding . '>' . $ret . '</' . $needArraySurrounding . '>';
					}
				}  
				else
				{
					if ( isset( $childValue->attributeValues ) )
						$childAttributeValues = $childValue->attributeValues;
					else
						$childAttributeValues = null;

					if ( $childValue instanceof EbatNs_SimpleType )
					{ 
						$ret .= $childValue->serialize( $childElementName, $childValue, $childAttributeValues, $preserveNull, $childType, $dataConverter ); 
					} 
					else
					{ 
						$ret .= EbatNs_SimpleType::serialize( $childElementName, $childValue, $childAttributeValues, $preserveNull, $childType, $dataConverter );
					} 
				} // plain
			} 
		} 
		$ret = '<' . $elementName . $this->_getAttributeString( $attributeValues ) . '>' . $ret . '</' . $elementName . '>';
		return $ret;
	} 

    public function unsetMetaData()
    {
        parent::unsetMetaData();
        unset($this->_elements);
    }
    
    public function getMetaDataElements()
    {
        return $this->_elements;
    }
} 
?>