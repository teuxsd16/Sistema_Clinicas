<?php
class Medico_model extends My_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'medico';
    }
}
