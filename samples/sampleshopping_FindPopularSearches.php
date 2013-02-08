<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'FindPopularSearchesRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_FindPopularSearches
 * 
 * Sample call for FindPopularSearches
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_FindPopularSearches.php,v 1.58 2010-11-15 07:54:42 michael Exp $
 * @access public 
 */
class sample_FindPopularSearches extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_FindPopularSearches::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new FindPopularSearchesRequestType();
		
        $res = $this->proxy->FindPopularSearches($req);
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

$x = new sample_FindPopularSearches;
$x->dispatchCall(array());

?>