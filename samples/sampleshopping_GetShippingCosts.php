<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetShippingCostsRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GetShippingCosts
 * 
 * Sample call for GetShippingCosts
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GetShippingCosts.php,v 1.55 2010-11-15 07:52:25 michael Exp $
 * @access public 
 */
class sample_GetShippingCosts extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GetShippingCosts::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetShippingCostsRequestType();
        $req->setItemID($params['ItemID']);
        $req->setDestinationCountryCode($params['CountryCode']);
        $req->setDestinationPostalCode($params['PostalCode']);
        
        $res = $this->proxy->GetShippingCosts($req);
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

$x = new sample_GetShippingCosts();
$x->dispatchCall
(
	array
	(
		'ItemID' => '110032357041',
		'CountryCode' => 'DE',
		'PostalCode' => '51103'
	)
);

?>