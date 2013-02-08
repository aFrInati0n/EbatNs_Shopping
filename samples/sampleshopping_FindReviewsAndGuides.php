<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'FindReviewsAndGuidesRequestType.php';
require_once 'EbatNs_EnvironmentShopping.php';

/**
 * sampleshopping_FindReviewsAndGuides
 * 
 * Sample call for FindReviewsAndGuides
 * 
 * @package ebatns
 * @subpackage samples_shopping
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sampleshopping_FindReviewsAndGuides.php,v 1.69 2011-07-22 08:24:02 michael Exp $
 * @access public 
 */
class sample_FindReviewsAndGuides extends EbatNs_EnvironmentShopping
{

    /**
     * sampleshopping_FindReviewsAndGuides::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new FindReviewsAndGuidesRequestType();
		
        $res = $this->proxy->FindReviewsAndGuides($req);
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

$x = new sample_FindReviewsAndGuides();
$x->dispatchCall(array());

?>