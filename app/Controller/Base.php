<?php

namespace Controller;

class Base {

    protected $f3;

    public function __construct(){
        $this->f3 = \Base::instance();
    }

    public function beforeroute(){

        $authModel = new \Model\Auth();
        $f3 = \Base::instance();
        $app_key = $f3->get('GET.app_key');
        $app_id = $f3->get('GET.app_id');
        var_dump($app_key);

        $authModel->VerifyCredentials($app_key, $app_id);

        $userModel = new \Model\Base('users');
        $userModel->getById(1);

        echo $userModel->username."\nORG: " . $f3->get('ORG_NAME') . "\n";
    }


    public function afterroute(){
        $data = $this->f3->get('data');
        echo json_encode($data);
    }
}