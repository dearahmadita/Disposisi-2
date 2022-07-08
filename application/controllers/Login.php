<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view('login/index');
        } else {
            $this->dologin();
        }
    }

    public function dologin()
    {
        $user = $this->input->post('email');
        $pswd = $this->input->post('password');
        //cari user berdasarkam email
        $user = $this->db->get_where('tb_user', ['email => $user'])->row_array();

        //jika user terdaftar
        if($user){
            //periksa password-nya
            if(password_verify($pswd, $user['password'])) {
                $HTTP_RAW_POST_DATA
            }
        }
    }
}


?>