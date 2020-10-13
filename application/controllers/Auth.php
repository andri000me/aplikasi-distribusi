<?php
class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('dataauth');
    }
 
    function index(){
        $this->load->view('page_auth');
    }
 
    function login(){
        $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $check_user = $this->dataauth->auth_user($username,$password);
        

            foreach($check_user->result() as $data){
                $user_data = array(
                    'id' => $data->id,
                    'name' => $data->name,
                    'username' => $data->username,
                    'level' => $data->level
                );
                $this->session->set_userdata($user_data);
            }
            if ($this->session->userdata('level') == 'admin')
                {
                    redirect('page_admin');
                }
            else if ($this->session->userdata('level') == 'korlap')
                {
                    redirect('page_korlap');
                }
            else 
                {
                    $text = '<div class="alert alert-danger" role="alert">Kombinasi Username dan Password Salah!</div>';
                    echo $this->session->set_flashdata('msg',$text);
                    redirect('auth');
                }
        }
 
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
