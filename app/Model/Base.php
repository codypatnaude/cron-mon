<?php

namespace Model;

class Base extends \DB\SQL\Mapper{
    protected $table;
    public $mapper;

    public function __construct($table){
        $f3 = \Base::instance();
        $this->table = $table;
        parent::__construct($f3->get('db_connection'), $table);
    }
    
    public function getById($id){
        $this->load(array('id = ?', $id));
    }

    
}