<?php
    class TipoModel extends CI_Model {
        public function selecionarTodos() {
            $dados = $this->db->query("SELECT * FROM tipo_produto")->result();

            return $dados;
        }

        public function inserir($dados) {
            try {
                $this->db->insert('tipo_produto', $dados);
                return true;
            }
            catch (Exception $ex) {
                return false;
            }
        }

        public function excluir($id) {
            $sql="DELETE FROM tipo_produto WHERE id=" . $id;
            $this->db->query( $sql );
            return true;
        }

        public function salvarnovo($nome) {
            $sql = "INSERT INTO tipo_produto 
                    (nome_tipo)
                    VALUES
                    ('" .$nome. "')
                ";

            $this->db->query( $sql );

            return true;
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM tipo_produto WHERE id=" . $id );
            return $retorno->result();
        }

        public function buscarNome( $nome ) {
            $sql = "SELECT COUNT(1) as total FROM tipo_produto WHERE nome_tipo='" . $nome . "'";

            $retorno = $this->db->query( $sql )->result();

            return $retorno;
        }

        public function salvaraltercao( $id, $nome) {
            $sql = "UPDATE tipo_produto 
                    SET
                        nome_tipo = '" . $nome . "'
                    WHERE id= " . $id . "
                ";

                $this->db->query( $sql );

            return true;
        }
    }
?>