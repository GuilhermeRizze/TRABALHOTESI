<?php
    class Login extends CI_Controller {

        private $qqur = "";

        public function __construct() {
            parent::__construct();

            $this->load->model("LoginModel");
        }

        public function SalvarRegistro() {
            $num1 = rand(0, 9);
            $num2 = rand(0, 9);
            $num3 = rand(0, 9);
            $num4 = rand(0, 9);
            $num5 = rand(0, 9);
            $num6 = rand(0, 9);

            $usuario = $num1 . '' . $num2 . ''.
                        $num3 . '-' . $num4 . ''.
                        $num5 . '' . $num6 . '';

            $data = array(
                "email" => $_POST["email"],
                "senha" => $_POST["senha"],
                "usuario" => $usuario
            );

            //$this->load->model("LoginModel");
            $retorno = $this->LoginModel->registrar( $data );

            if ( $retorno )
                echo "Veja seu e-mail, para continuar o cadastro";
            else
                echo "Erro ao criar usuário";
        }

        //Apenas chama o formulario
        public function Registro() {
            $this->load->view('login/register');
        }

        //Apenas chama o formulario
        public function RegistarSenha() {
            $this->load->view('login/registrarsenha');
        }

        //Alteração de senha
        public function AlterarSenha() {
            $senha = md5( $_POST["senha"] . $this->qqur );
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            
            //$this->load->model("LoginModel");
            
            $retorno = $this->LoginModel->CriarSenha($email, $senha, $usuario);

            if ($retorno)
                echo "Senha cadastrada com sucesso.";
            else
                echo "Senha não pode ser cadastrada.";
        }

        //Tela de login
        public function Index() {
            $this->template->load("templates/adminLogin","login/login");
        }

        public function ValidaLogin() {
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $senha = md5( $senha . $this->qqur);

            //$this->load->model("LoginModel");

            $retorno = $this->LoginModel->ValidaLogin($email, $senha);

            if ( $retorno ) {
                $_SESSION["tesi2022"] = array(
                    "email" => $email,
                    "admin" => true
                );

                header("location: /index.php");
            }
            else {
                echo "Usuário e/ou sneha inválidos";
            }

        }

        public function Deslogar() {
            unset($_SESSION);
            header("location: /index.php/login");
        }
    }
?>