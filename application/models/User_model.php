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
            'phoneNumber' => $this->input->post('phoneNumber'),
            'password' => sha1($this->input->post('password'))

        );
        //insert data to the database
        $this->db->insert('customer',$data);

    }

    public function get_id($username){
        $this->db->select('idcustomer');
        $this->db->from('customer');
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
        $res = $this->db->get('customer');

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
        $query=$this->db->get('customer');
        return $query->result_array();
    }

    public function edit_profile($insert_data,$id) {
        $this->db->set($insert_data);
        $this->db->where('idcustomer',$id);
        $this->db->update('customer');
        
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_chosen($id) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('idcustomer',$id);
        return $this->db->get()->result_array();
    }
}

?>
