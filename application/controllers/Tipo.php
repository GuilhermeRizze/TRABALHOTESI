<?php

    class Tipo extends CI_Controller {

        public function __construct() {
            parent::__construct();

            if (    !isset($_SESSION["Usuario"]) ) {
                header("location: /index.php/login");
            }
        }

        public function formNovo() {
 
             $this->template->load("templates/adminTemp","/tipo/formnovo");
         }

        public function index() {
            $this->load->model("TipoModel");

            $tipo = $this->TipoModel->selecionarTodos();
            $tabela = "";


            foreach($tipo as $item ) {
                //GET
                $tabela = $tabela . "<tr>";

                if ( isset($_SESSION["Usuario"])) {
                    $tabela = $tabela . "
                        <td style='cursor: pointer'>
                            <a href='/index.php/tipo/alterar?codigo=" . $item->id . "'>
                                ✏️
                            </a>
                            <a href='/index.php/tipo/excluir?codigo=" . $item->id . "'>
                                ❌    
                            </a>
                        </td>";
                }

                $tabela = $tabela . "
                        <td>" . $item->id ."</td>
                        <td>" . $item->nome_tipo ."</td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_tipos" => $tipo,
                "tabela" => $tabela,
                "titulo" => "Você está na Padaria do Barba",
                "sucesso" => "Categoria adicionado com sucesso",
                "erro" => "404"
            );

            $this->template->load("templates/adminTemp", "tipo/index", $variavel );
        }

        //Salvar novo tipo
        public function salvarnovo() {
            
            $this->load->model("TipoModel");

            $nome = $_POST["nome"];

            $retorno = $this->TipoModel->buscarNome( $nome );

            //var_dump( $_POST );

            if ( $retorno[0]->total > 0 ) {
                echo "Já existe um tipo cadastrado" . $retorno[0]->total;
            } else {
                $retorno = $this->TipoModel->salvarnovo(
                    $nome
                ); 
                
                header("location: /index.php/tipo");
            }
        }

        //Excluir 
        public function excluir() {
            $this->load->model("TipoModel");

            $id = $_GET["codigo"];

            $this->TipoModel->excluir($id);

            header("location: /index.php/tipo");
        }

        public function alterar() {
            $this->load->model("TipoModel");

            $id = $_GET["codigo"];

            $retorno = $this->TipoModel->buscarId( $id );
            
            $data = array(
                "titulo"=>"Alteração de Categoria",
                "Tipo"=>$retorno[0],
            );

            $this->template->load("templates/adminTemp", "tipo/formAlterar", $data);


        }

        public function salvaralteracao() {
            $this->load->model("TipoModel");

            $id = $_POST["id"];
            $nome = $_POST["nome"];

            $retorno = $this->TipoModel->salvaraltercao(
                $id, $nome
            );

            if ($retorno == true) {
                header('location: /index.php/tipo');
            }
            else {
                echo "Ocorreu um erro na alteração";
            }
        }

    }
?>