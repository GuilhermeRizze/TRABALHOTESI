<?php
    class Login extends CI_Controller {


        public function __construct() {
            parent::__construct();

            $this->load->model("LoginModel");
        }

        public function SalvarRegistro() {
           
            $data = array(
                "email" => $_POST["email"],
                "senha" => md5($_POST["senha"]),
                "usuario" => $_POST["usuario"]
            );

            //$this->load->model("LoginModel");
            $retorno = $this->LoginModel->registrar( $data );

            if ( $retorno )
                echo "Usuario Cadastrado com sucesso";
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
            $senha = md5( $_POST["senha"]);
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

            $senha = md5( $senha);

            //$this->load->model("LoginModel");

            $retorno = $this->LoginModel->ValidaLogin($email, $senha);

            if ( $retorno ) {
                $_SESSION["Usuario"] = array(
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


        public function consulta() {
            $this->load->model("LoginModel");

            $usuarios = $this->LoginModel->selecionarTodos();
            $tabela = "";

            //echo "Bem vindo " . @$_SESSION["tesi2022"]["email"];

            foreach($usuarios as $item ) {
                //GET
                $tabela = $tabela . "<tr>";

                if ( isset($_SESSION["Usuario"])) {
                    $tabela = $tabela . "
                        <td style='cursor: pointer'>
                            <a href='/index.php/login/alterar?codigo=" . $item->id . "'>
                                ✏️
                            </a>
                            <a href='/index.php/login/excluir?codigo=" . $item->id . "'>
                                ❌    
                            </a>
                        </td>";
                }

                $tabela = $tabela . "
                        <td>" . $item->usuario ."</td>
                        <td>" . $item->senha ."</td>
                        <td>" . $item->email ."</td>
                    </tr>
                ";
            }

            $var = array(
                "lista_usuarios" => $usuarios,
                "tabela" => $tabela,
                "titulo" => "Você está em PADARIA DO BARBA",
                "sucesso" => "Adicionado com sucesso",
                "erro" => "ERRO"
            );

            $this->template->load("templates/adminTemp", "login/ver", $var );
        }

        public function alterar() {
            $this->load->model("LoginModel");

            $id = $_GET["codigo"];

            $retorno = $this->LoginModel->buscarId( $id );
            
            $data = array(
                "titulo"=>"Alteração de Usuario",
                "Login"=>$retorno[0]
            );

            $this->template->load("templates/adminTemp", "login/formAlterar", $data);


        }


        public function salvaralteracao() {
            $this->load->model("LoginModel");

            $id = $_POST["id"];
            $usuario = $_POST["usuario"];
            $senha = md5($_POST["senha"]);
            $email = $_POST["email"];

            $retorno = $this->LoginModel->salvaraltercao(
                $id, $usuario, $senha, $email
            );

            if ($retorno == true) {
                header('location: /index.php/login/consulta');
            }
            else {
                echo "Ocorreu um erro na alteração";
            }
        }

        public function excluir() {
            $this->load->model("LoginModel");

            $id = $_GET["codigo"];

            $this->LoginModel->excluir($id);

            header("location: /index.php/login/consulta");
        }
    }

?>