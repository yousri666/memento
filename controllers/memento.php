<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Memento extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = Array();
        /* $data['head'] = $this->load->view(
          (ENVIRONMENT === 'development') ? "memento_head_dev" : "memento_head_release",null, FALSE
          ); */
        $data['synapse'] = $this->load->view("synapse", null, TRUE);
        $this->load->view('memento_head_dev.php');
        $this->load->view("memento", $data);
        $this->load->view("memento_scripts_dev.php");
    }

    public function test() {
        $data = Array();

        $data['head'] = $this->load->view(
                (ENVIRONMENT === 'development') ? "memento_head_dev" : "memento_head_release", null, FALSE
        );

        $this->load->view("memento", $data);
    }

}
