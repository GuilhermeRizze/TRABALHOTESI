<?php

    class ProdutoModel extends CI_Model {

        public function selecionarTodos() {
            $retorno = $this->db->query("
                                    SELECT
                                        P.*,
                                        T.nome_tipo AS tipo_produto
                                    FROM produto AS P
                                    INNER JOIN tipo_produto AS T
                                        ON T.id = P.tipo_produto            
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
        public function salvaraltercao( $id, $nome, $perecivel, $valor, $imagem, $tipo_produto) {
            $sql = "UPDATE produto 
                    SET
                        nome = '" . $nome . "',
                        perecivel = '" . $perecivel. "',
                        valor = " . $valor . ",
                        imagem = '" . $imagem. "',
                        tipo_produto = '" . $tipo_produto . "'
                    WHERE id= '" . $id . "'
                ";

                $this->db->query( $sql );

            return true;
        }

        public function salvarnovo($nome, $perecivel, $valor, $imagem, $tipo_produto) {
            $sql = "INSERT INTO produto 
                    (nome, perecivel, valor, imagem, tipo_produto)
                    VALUES
                    ('" .$nome. "', '" . $perecivel ."', '" . $valor . "', '" . $imagem . "', '" . $tipo_produto . "')
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