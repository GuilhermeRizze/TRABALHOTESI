<?php

    class Produto extends CI_Controller {

        public function __construct() {
            parent::__construct();

            if (    !isset($_SESSION["Usuario"]) ) {
                header("location: /index.php/login");
            }
        }

        public function index() {
            $this->load->model("ProdutoModel");

            $produto = $this->ProdutoModel->selecionarTodos();
            $tabela = "";

            //echo "Bem vindo " . @$_SESSION["tesi2022"]["email"];

            foreach($produto as $item ) {
                //GET
                $tabela = $tabela . "<tr>";

                if ( isset($_SESSION["Usuario"])) {
                    $tabela = $tabela . "
                        <td style='cursor: pointer'>
                            <a href='/index.php/produto/alterar?codigo=" . $item->id . "'>
                                ✏️
                            </a>
                            <a href='/index.php/produto/excluir?codigo=" . $item->id . "'>
                                ❌    
                            </a>
                        </td>";
                }

                $tabela = $tabela . "
                        <td>" . $item->nome ."</td>
                        <td>" . $item->perecivel ."</td>
                        <td>" . $item->tipo_produto ."</td>
                        <td>" . $item->valor ."</td>
                        <td>
                            <img src='" . $item->imagem . "' style='width:150px' />
                        </td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_produtos" => $produto,
                "tabela" => $tabela,
                "titulo" => "Você está na Padaria do Barba",
                "sucesso" => "Produto adicionado com sucesso",
                "erro" => "404"
            );

            $this->template->load("templates/adminTemp", "produto/index", $variavel );
        }

        //Alteração de produto
        public function alterar() {
            $this->load->model("ProdutoModel");

            $id = $_GET["codigo"];

            $retorno = $this->ProdutoModel->buscarId( $id );
            
            $data = array(
                "titulo"=>"Alteração de Produto",
                "Produto"=>$retorno[0],
                "opcoes"=>$this->Tipo_prod($retorno[0]->tipo_produto)
            );

            $this->template->load("templates/adminTemp", "produto/formAlterar", $data);


        }

        //Salva os dados atualizados 
        public function salvaralteracao() {
            $this->load->model("ProdutoModel");

            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $perecivel = $_POST["perecivel"];
            $tipo_produto = $_POST["tipo"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];

            $retorno = $this->ProdutoModel->salvaraltercao(
                $id, $nome, $perecivel, $valor, $imagem, $tipo_produto
            );

            if ($retorno == true) {
                header('location: /index.php/produto');
            }
            else {
                echo "Ocorreu um erro na alteração";
            }
        }
        
        //Cadastro
        public function formNovo() {

           $opcao = $this->Tipo_prod( 0 );
            
           $data = array(
                'opcoes' => $opcao
            );

            $this->template->load("templates/adminTemp","/produto/formnovo", $data);
        }

        private function Tipo_prod( $id ) {
            $this->load->model("TipoModel");
            $tipos = $this->TipoModel->selecionarTodos();

            $option = "";
            foreach($tipos as $linha) {
                $selecionado = "";

                if ( $id == $linha->id )
                    $selecionado = "selected";

                $option .= "<option 
                                value='" . $linha->id . "'
                                " . $selecionado . "
                            >" 
                                . $linha->nome_tipo . 
                            "</option>"; 
            }

            return $option;
        }

        //Salvar novo produto
        public function salvarnovo() {
            
            $this->load->model("ProdutoModel");

            $nome = $_POST["nome"];
            $perecivel = $_POST["perecivel"];
            $tipo_produto = $_POST["tipo"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];

            $retorno = $this->ProdutoModel->buscarNome( $nome );

            //var_dump( $_POST );

            if ( $retorno[0]->total > 0 ) {
                echo "Já existe um produto cadastrado" . $retorno[0]->total;
            } else {
                $retorno = $this->ProdutoModel->salvarnovo(
                    $nome, $perecivel, $valor, $imagem, $tipo_produto
                ); 
                
                header("location: /index.php/produto");
            }
        }

        //Excluir 
        public function excluir() {
            $this->load->model("ProdutoModel");

            $id = $_GET["codigo"];

            $this->ProdutoModel->excluir($id);

            header("location: /index.php/produto");
        }

        public function acesso() {
            $this->load->model("ProdutoModel");

            header("location: /formAcesso.php/cliente");
        }





        public function consulta() {
            $this->load->model("ProdutoModel");

            $produto = $this->ProdutoModel->selecionarTodos();
            $tabela = "";

            foreach($produto as $item ) {

                $tabela = $tabela . "<li class='wow fadeInLeft' data-wow-duration='300ms' data-wow-delay='300ms'>

                    <div class='blog-img'>
                        <img src='".$item->imagem."' alt='blog-img' style='width:300px'>
                    </div>
                    <div class='content-right'>
                        <h3>".$item->nome."</h3>
                        <p>Tipo Produto: ".$item->tipo_produto."</p>
                        <p>Perecivel: ".$item->perecivel."</p>
                        <p>Valor: R$ ".$item->valor."</p>
                    </div>
                    </li>
                ";
            }  
               
            $variavel = array(
                "lista_produtos" => $produto,
                "tabela" => $tabela,
                "titulo" => "Você está na Padaria do Barba",
                "sucesso" => "Produto adicionado com sucesso",
                "erro" => "404"
            );

            $this->template->load("templates/clienteTemp", "cliente/index", $variavel );
        

    }

    public function buscar() {
        $this->load->model("ProdutoModel");

        $id = $_GET["codigo"];

        $retorno = $this->ProdutoModel->buscarCategoria( $id );
    

        $tabela = "";

            foreach($retorno as $item ) {
                $tabela = $tabela . "<tr>";


                $tabela = $tabela . "
                        <td></td>
                        <td>" . $item->id ."</td>
                        <td>" . $item->nome ."</td>
                        <td>" . $item->perecivel ."</td>
                        <td>" . $item->tipo_produto ."</td>
                        <td>" . $item->valor ."</td>
                        <td>
                            <img src='" . $item->imagem . "' style='width:300px' />
                        </td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_produtos" => $retorno,
                "tabela" => $tabela,
                "titulo" => "Você está na Padaria do Barba",
                "sucesso" => "Produto adicionado com sucesso",
                "erro" => "404"
            );

            $this->template->load("templates/clienteTemp", "cliente/resultado", $variavel );


    }
}
?>