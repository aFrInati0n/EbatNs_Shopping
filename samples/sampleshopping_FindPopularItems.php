<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'FindPopularItemsRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_FindPopularItems
 * 
 * Sample call for FindPopularItems
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_FindPopularItems.php,v 1.58 2010-11-15 07:54:42 michael Exp $
 * @access public 
 */
class sample_FindPopularItems extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_FindPopularItems::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new FindPopularItemsRequestType();
        $req->setQueryKeywords($params['QueryKeywords']);
		
        $res = $this->proxy->FindPopularItems($req);
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

$x = new sample_FindPopularItems();
$x->dispatchCall
(
	array
	(
		'QueryKeywords' => 'ipod'
	)
);

?>