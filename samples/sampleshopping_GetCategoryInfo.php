<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetCategoryInfoRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GetCategoryInfo
 * 
 * Sample call for GetCategoryInfo
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GetCategoryInfo.php,v 1.58 2010-11-15 07:54:42 michael Exp $
 * @access public 
 */
class sample_GetCategoryInfo extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GetCategoryInfo::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetCategoryInfoRequestType();
        $req->setCategoryID($params['CategoryID']);
		
        $res = $this->proxy->GetCategoryInfo($req);
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

$x = new sample_GetCategoryInfo();
$x->dispatchCall
(
	array
	(
		'CategoryID' => '8267'
	)
);

?>