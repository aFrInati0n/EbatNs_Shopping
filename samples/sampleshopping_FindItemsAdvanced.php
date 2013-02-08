<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'FindItemsAdvancedRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_FindItemsAdvanced
 * 
 * Sample call for FindItemsAdvanced
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_FindItemsAdvanced.php,v 1.76 2011-12-29 12:34:11 michaelcoslar Exp $
 * @access public 
 */
class sample_FindItemsAdvanced extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_FindItems::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new FindItemsAdvancedRequestType();
        $req->setQueryKeywords($params['QueryKeywords']);
        $req->setPriceMax($params['PriceMax']);
        $req->setMaxEntries($params['MaxEntries']);
        $req->setCategoryID($params['CategoryID']);
        $req->setBidCountMin($params['BidCountMin']);
        
		
        $res = $this->proxy->FindItemsAdvanced($req);
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

$x = new sample_FindItemsAdvanced();
$x->dispatchCall
(
	array
	(
		'QueryKeywords' => 'ipod',
		'PriceMax' => '150.00',
		'MaxEntries' => '10',
		'CategoryID' => '8267',
		'BidCountMin' => '5'
	)
);

?>