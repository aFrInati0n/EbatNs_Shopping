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
 * @version $Id: sampleshopping_FindHalfProducts.php,v 1.84 2012-05-09 11:42:15 michaelcoslar Exp $
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