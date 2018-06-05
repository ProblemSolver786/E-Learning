<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author jijodileep
 */
//require_once('dataTable.php');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function login($username, $password) {
        $qry = "select * from users where `user_password`='$password' and `user_name` ='$username'";
        $val = $this->db->query($qry);
        return $val->row_array();
    }

    function getall() {
        $qry = "select * from users where `user_type`='user'";
        $val = $this->db->query($qry);
        return $val->result_array();
    }

    function getpics() {
        $qry = "select * from pictures";
        $val = $this->db->query($qry);
        return $val->result_array();
    }

    function getexams() {
        $qry = "select * from examinations";
        $val = $this->db->query($qry);
        return $val->result_array();
    }
    function getexamsmenu() {
        $qry = "select id,name from examinations";
        $val = $this->db->query($qry);
        return $val->result_array();
    }

    function getcourses() {
        $qry = "select * from course";
        $val = $this->db->query($qry);
        return $val->result_array();
    }
    function getcoursesmenu() {
        $qry = "select id,name from course";
        $val = $this->db->query($qry);
        return $val->result_array();
    }

    function getnews() {
        $qry = "select *,DATE_FORMAT(date, '%d/%m/%Y' ) as newdate from news";
        $val = $this->db->query($qry);
        return $val->result_array();
    }


    function getcount() {
        $qry = "select count(id) as count from users where `user_type`='user'";
        $val = $this->db->query($qry);
        return $val->row()->count;
    }

    function search($search) {
        $qry = "select c.*,q.*,q.id as qid from category  as c inner join questions as q on q.category=c.id where q.question like '%".$search."%' or c.name like '%".$search."%'";
        $val = $this->db->query($qry);
        return $val->result_array();
    }

    function searchcount($search) {
        $qry = "select c.*,q.*,q.id as qid from category  as c inner join questions as q on q.category=c.id where q.question like '%".$search."%' or c.name like '%".$search."%'";
        $val = $this->db->query($qry);
        return $val->num_rows();
    }

    function getcontent($id) {
        $qry = "select * from category  as c inner join questions as q on q.category=c.id inner join videos as v on v.id=q.video where q.id=".$id;
        $val = $this->db->query($qry);
        return $val->result_array();
    }

    function prevsearch($search)
    {
        $qry = "select count(id) from search where search='".$search."'";
        $val = $this->db->query($qry);
        return $val->num_rows();
    }

    function approve($id) {
        $qry = "update users set `user_status` = if(user_status=1, 0, 1) where id =".$id;
        $val = $this->db->query($qry);
        redirect('college/user');
    }

    function searchitems($data)
    {
        $this->db->insert('search',$data);
    }


}
