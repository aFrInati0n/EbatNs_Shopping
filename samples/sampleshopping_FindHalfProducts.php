<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'FindHalfProductsRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_FindHalfProducts
 * 
 * Sample call for FindHalfProducts
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_FindHalfProducts.php,v 1.92 2012-09-10 11:10:19 michaelcoslar Exp $
 * @access public 
 */
class sample_FindHalfProducts extends EbatNs_EnvironmentShopping
{

   /**
     * sampleshopping_FindHalfProducts::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new FindHalfProductsRequestType();
        $req->setQueryKeywords($params['QueryKeywords']);
		
        $res = $this->proxy->FindHalfProducts($req);
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

$x = new sample_FindHalfProducts();
$x->dispatchCall
(
	array
	(
		'QueryKeywords' => 'ipod'
	)
);

?>