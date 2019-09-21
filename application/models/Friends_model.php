<?php
class Friends_model extends CI_Model {
    function __construct() { 
        parent::__construct (); 
        {
            $this->load->database (); 
        }
    }
    function friends_dbdata() { 

        // $query = $this->db->get('friends'); //取得friends資料表 (資料表所有欄位)
        // return $query; 
        $sql = "SELECT `name`, `tel` FROM friends;";
        $query = $this->db->query($sql);
        return $query; 
    }
}