<?php

namespace Model;

class Auth extends Base{

    public function __construct(){
        parent::__construct("organizations");
    }

    public function VerifyCredentials($app_key, $app_id){
        $this->load(array('app_id = ? AND app_key = ?', $app_id, $app_key));
        if(empty($this->id)){
            return false;
        }

        $f3 = \Base::instance();
        $f3->set('ORG_ID', $this->id);
        $f3->set('ORG_NAME', $this->name);
    }
}