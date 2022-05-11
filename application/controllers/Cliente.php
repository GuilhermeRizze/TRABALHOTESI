<?php

    class Cliente extends CI_Controller {

        public function __construct() {
            parent::__construct();

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