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

class Register_model extends CI_Model {

 function __construct() {
        parent::__construct();
        $this->load->database();
    }

     function save() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password'); // if it is zero then we will add the item
		$college = $this->input->post('college');
        $status = 1;
        $data = array(
        	'user_name'=>$name,
        	'user_email'=>$email,
        	'user_password'=>$password,
        	'college'=>$college,
            'user_status'=>$status
        );
        $this->db->insert('users',$data);
        redirect('college/login');
    }

}