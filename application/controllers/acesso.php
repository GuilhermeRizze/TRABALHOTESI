<?php
    class acesso extends CI_Controller {


        public function __construct() {
            parent::__construct();


        }

        //Apenas chama o formulario
        public function Index() {
            $this->load->view("cliente/formAcesso.php"); 
        }

        public function admin() {
            $this->template->load("templates/adminLogin","login/login");
        }
    }