<?php

    class ProdutoModel extends CI_Model {

        public function selecionarTodos() {
            $retorno = $this->db->query("
                                    SELECT
                                        P.*,
                                        T.nome_tipo AS tipo_produto
                                    FROM produto AS P
                                    INNER JOIN tipo_produto AS T
                                        ON T.id = P.cor            
                                    ");
                                    
            return $retorno->result();
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM produto WHERE id=" . $id );
            return $retorno->result();
        }

        public function buscarNome( $nome ) {
            $sql = "SELECT COUNT(1) as total FROM produto WHERE nome='" . $nome . "'";

            $retorno = $this->db->query( $sql )->result();

            return $retorno;
        }

        //Salvar alterações no veiculo
        public function salvaraltercao( $id, $nome, $perecivel, $tipo_produto, $valor, $imagem) {
            $sql = "UPDATE veiculo 
                    SET
                        nome = '" . $nome . "',
                        perecivel = '" . $perecivel. "',
                        tipo_produto = " . $tipo_produto . ",
                        valor = " . $valor . ",
                        imagem = '" . $imagem. "'
                    WHERE id= " . $id . "
                ";

            return true;
        }

        public function salvarnovo($nome, $perecivel, $tipo_produto, $valor, $imagem) {
            $sql = "INSERT INTO produto 
                    (nome, perecivel, tipo_produto, valor, imagem)
                    VALUES
                    ('" .$nome. "', '" . $perecivel ."', '" . $tipo_produto . "', '" . $valor . "', '" . $imagem . "')
                ";

            $this->db->query( $sql );

            return true;
        }

        public function excluir($id) {
            $sql="DELETE FROM produto WHERE id=" . $id;
            $this->db->query( $sql );
            return true;
        }
    }
?>