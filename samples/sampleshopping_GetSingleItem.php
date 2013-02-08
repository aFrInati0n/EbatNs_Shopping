<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetSingleItemRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GetSingleItem
 * 
 * Sample call for GetSingleItem
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GetSingleItem.php,v 1.80 2011-12-29 12:41:27 michaelcoslar Exp $
 * @access public 
 */
class sample_GetSingleItem extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GetSingleItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetSingleItemRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->GetSingleItem($req);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_GetSingleItem();
$x->dispatchCall
(
	array
	(
		'ItemID' => '110032357041'
	)
);

?>