<?php

/**
 * Description of VerifyUser
 *
 * @author Chris
 */

namespace Api\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
 

class VerifyUser extends AbstractPlugin{ 

    public function verify(){
        $auth=$this->getController()->getServiceLocator()->get('AuthService');
        
        //check login
        if(!$auth->hasIdentity()){
            return false;
        }
        
        //check is admin
        $isAdmin=false;
        $loggedInUser=$auth->getIdentity();
        foreach($loggedInUser->roles as $role){
            if($role=="admin"){
                $isAdmin=true;
            }
        }
        if(!$isAdmin){
            return false;
        }
        return true;
    }
}
