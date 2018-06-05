<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reg_model
 *
 * @author fff
 */

class Login_model extends CI_Model {

 function __construct() {
        parent::__construct();
        $this->load->database();
    }

     function login() {
        $name = $this->input->post('name');
        $password = $this->input->post('password'); // if it is zero then we will add the item
        $this->load->model('User_model', 'user');
        $user = $this->user->login($name, $password);
		if ($user['user_password'] == $password && $user['user_name'] == $name) {
                $newdata['user'] = $user;

                $this->session->set_userdata($newdata);
                $url = base_url() . "college";
                redirect($url);
            } 
            $error = "Invalid User Name & password  ";
            $data = array("type" => $type, 'error' => $error);
            $this->load->view('_jlogin/login', $data);
    }

}