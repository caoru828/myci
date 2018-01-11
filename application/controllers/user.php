<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

    /**
     *
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('reg');
    }

    public function user_list(){
        $this->load->model('User_model');
        $users = $this->User_model->user_list();
        $this->load->view('list',array('list'=>$users));
    }

    public function add(){
        $name = $this->input->post('username');

        echo $name;

        $this->load->model('User_model');
        $row = $this->User_model->add($name);
        if($row>0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

    public  function  del_user($id){
        $row = $this->User_model->del_user($id);
        if($row>0){
            redirect('user/user_list');
        }
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */