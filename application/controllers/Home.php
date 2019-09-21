<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    //建構函式
    public function __construct(){
        parent::__construct();
        //共用的部分可以寫在這邊
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('home_index');
    }

    public function about(){
        $this->load->view('home_about');
    }
    //測試DB連線
    public function createtbl(){
        
        $sql = '
        CREATE TABLE `friends` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `name` varchar(20) DEFAULT NULL,
          `tel` varchar(20) DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        
        ';
        $this->db->query($sql);
        echo 'ok';
    }
    //建立資料
    public function adddata(){
        $sql = "
            INSERT INTO friends(`name`,`tel`) VALUES ('泡泡','0911222333');
            INSERT INTO friends(`name`,`tel`) VALUES ('毛毛','0900112233');
            INSERT INTO friends(`name`,`tel`) VALUES ('花花','0922334444');
        ";
        $this->db->query($sql);
        echo 'ok';
    }
    //撈資料
    public function showdata(){
        $sql = "SELECT `name`, `tel` FROM friends;";
        $query = $this->db->query($sql);

        foreach ($query->result() as $row)
        {
            echo $row->name;
            echo $row->tel;
            echo '</br>';
            echo '</br>';
        }

        $query->free_result();
    }
    
    public function friend(){

        //20190906
        // $this->load->model('Friends_model');
        // $query = $this->Friends_model->friends_dbdata ()->result_array (); 
        // $data = array ('alldata' => $query);
        // $this->load->view('friends',$data); 

        $this->load->model('friends_model');
        $data = array(
            "friends" => $this->friends_model->getAllFriends()
        );
        $this->load->view('friends', $data); 

    }

    public function registerform(){

        $this->load->view('register'); 

    }

    public function register_finish(){

       $data = array(
            "member_username"=> $this->input->post('username'),
            "member_password"=> $this->input->post('password'),
            "member_name"=> $this->input->post('name'),
            "member_phone"=> $this->input->post('phone'),
       );
       $this->db->insert('member',$data);
       
    }
}

?>