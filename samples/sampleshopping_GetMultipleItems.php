<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetMultipleItemsRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GetMultipleItems
 * 
 * Sample call for GetMultipleItems
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GetMultipleItems.php,v 1.56 2010-11-15 07:53:17 michael Exp $
 * @access public 
 */
class sample_GetMultipleItems extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GetMultipleItems::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetMultipleItemsRequestType();
        $req->setItemID($params['ItemID']);
		
        $res = $this->proxy->GetMultipleItems($req);
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

$x = new sample_GetMultipleItems();
$x->dispatchCall
(
	array
	(
		'ItemID' => array
					(
						'110032365770',
						'110032593939',
						'110032592512'
					)
	)
);

?>