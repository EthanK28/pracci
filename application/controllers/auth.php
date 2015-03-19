<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function login(){
        $this -> load ->config('opentutorials');
        $this->_head();

        $this -> load -> view('login');

        $this->load->view('footer');
    }

    function authentication(){
        var_dump($this->config->item('authentication'));
        $authentification = $this -> config ->item('authentication');
        if($this->input->post('id')==$authentification['id'] &&
            $this->input->post('password')==$authentification['password']
        ) {
            echo "일치";
            $this->session->set_userdata('is_login', true);
            $this->load->helper('url');
            redirect("http://localhost/ci/index.php/topic/add");
        } else {
            echo "불일치";
            $this -> session -> set_flashdata('message', '로그인에 실해 했습니다!');
            $this -> load -> helper('url');
            redirect("http://localhost/ci/index.php/auth/login");


        }
    }

    function logout(){
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('/ci/');
    }
}