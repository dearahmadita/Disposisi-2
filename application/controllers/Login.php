<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email','email', 'required|trim');
        $this->form_validation->set_rules('password','password', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('index');
        } else {
            $this->doLogin();
        }
    }

    public function doLogin()
    {
        $user = $this->input->post('email');
        $pswd = $this->input->post('password');
        //cari user berdasarkan email
        $user = $this->db->get_where('tb_user', ['email' => $user])->row_array();

        //jika user terdaftar
        if($user){
                //periksa password-nya
                if(password_verify($pswd, $user['password'])) {
                    $data = [
                        'id'        =>$user['id'],
                        'email'     =>$user['email'],
                        'username'  =>$user['username'],
                        'role'      =>$user['role']
                    ];
                    $userid = $user['id'];
                    $this->session->set_userdata($data);
                    //periksa role_nya
                    if ($user['role'] == 'admin') {
                        $this->_updateLastLogin($userid);
                        redirect('admin/menu');
                    } else if ($user['role'] == 'sekretaris') {
                        $this->_updateLastLogin($userid);
                        redirect('surat');
                    } else {
                        //jika password salah
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> <b>Error :</b> Password Salah. </div>');
                        redirect('/');
                    } 
                } else {
                    //jika user tidak terdaftar
                    //echo "User Kadada";
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> <b>Error :</b> User Tidak Terdaftar. </div>');
                    redirect('/');
                } 
        }        
    }
    private function _updateLastLogin($userid) {
        $sql = "UPDATE tb_user SET last_login=now() WHERE id=$userid";
        $this->db->query($sql);
    }

    public function logout()
    {
        //hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function block()
    {
        $data = array(
            'user'      => infoLogin(),
            'title'     => 'Acess Denied!'
        );
        $this->load->view('Login/error404', $data);
    }

}

?>