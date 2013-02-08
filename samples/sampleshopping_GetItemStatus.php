<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetItemStatusRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GetItemStatus
 * 
 * Sample call for GetItemStatus
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GetItemStatus.php,v 1.80 2011-12-29 12:41:27 michaelcoslar Exp $
 * @access public 
 */
class sample_GetItemStatus extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GetItemStatus::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetItemStatusRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->GetItemStatus($req);
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

$x = new sample_GetItemStatus();
$x->dispatchCall
(
	array
	(
		'ItemID' => '110032365770'
	)
);

?>