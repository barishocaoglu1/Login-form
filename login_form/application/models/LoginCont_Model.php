<?php

class LoginCont_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "form";

    public function insert($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function get_all()
    {
        return $this->db->get($this->tableName)->result();
    }
}

?>