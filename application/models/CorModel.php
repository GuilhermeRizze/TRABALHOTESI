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
    }
?>