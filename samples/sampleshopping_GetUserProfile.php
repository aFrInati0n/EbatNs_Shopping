<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetUserProfileRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_GetUserProfile
 * 
 * Sample call for GetUserProfile
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_GetUserProfile.php,v 1.74 2011-12-29 12:29:15 michaelcoslar Exp $
 * @access public 
 */
class sample_GetUserProfile extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_GetUserProfile::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetUserProfileRequestType();
        $req->setUserID($params['UserID']);
		
        $res = $this->proxy->GetUserProfile($req);
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

$x = new sample_GetUserProfile();
$x->dispatchCall
(
	array
	(
		'UserID' => 'its-seller-001'
	)
);

?>