<?php
class Medico_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this>table = 'medico';
    }
    
}