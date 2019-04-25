<?php

class User_model extends CI_Model {

    public function insertUser () {

        //insert data
        $data = array(
            //assign data into array elements
            'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' =>$this->input->post('email'),
            'streetAddress' =>$this->input->post('streetAddress'),
            'postalCode' =>$this->input->post('postalCode'),
            'contact' => $this->input->post('contact'),
            'password' => sha1($this->input->post('password'))

        );
        //insert data to the database
        $this->db->insert('users',$data);

    }

    public function get_id($username){
        $this->db->select('idcustomer');
        $this->db->from('users');
        $this->db->where('username',$username);
        return $this->db->get()->row('idcustomer');
    }

    public function checkLogin() {

        //enter username and password
        $username = $this->input->post('username',TRUE);
        $password = sha1($this->input->post('password',TRUE));

        //fetch data from database
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $res = $this->db->get('users');

        //check if there's a user with the above inputs
        if ($res->num_rows() == 1) {

            //retrieve the details of the user
            return $res->result();

        } else {

            return false;

        }

    }

    public function get_detail($username) {
        $this->db->select('*');
        $this->db->where('username',$username);
        $query=$this->db->get('users');
        return $query->result_array();
    }
}



?>