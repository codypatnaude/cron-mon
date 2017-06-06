<?php

namespace Controller;

class Api extends Base{

    public function __construct(){
        parent::__construct();
    }

    public function ping(){
        $job_id = $this->f3->get('PARAMS.jobid');
        $this->f3->set('data', "updating job $job_id");
    }
}