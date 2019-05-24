<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once "Gitlogin.php";
include_once (dirname(__FILE__) . "/gitlogin.php");
class GitCallback extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // $this->load->model('user');
    }

    public function methodB(){
        // require_once(APPPATH.'controllers/gitlogin.php');
        $data= new Data();
        $data ->fetchData();
        // echo "hi";
        // var_dump($_SESSION['payload']);
    }
        
}


