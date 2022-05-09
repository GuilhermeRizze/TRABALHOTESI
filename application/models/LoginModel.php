<?php

    class LoginModel extends CI_Model {

        //Registro
            //Validação de e-mail
            //Pré registro -> dados, chave
            
        //Login

        //Não fiz
            //Esqueci senha

            //Alterar senha
            //Alterar nome
            //Alterar admin
            //Inativar usuario

        public function Registrar($data) {

            try {
                if ( $this->ValidaEmail( $data["email"] ) )  {
                    $this->db->insert('usuario', $data);

                    return true;
                }
                else
                    return false;
            }
            catch (Exception $ex) {
                return false;
            }
        }

        public function ValidaEmail( $email ) {
            $sql = "SELECT count(1) as total 
                    FROM usuario
                    WHERE email='" . $email ."' ";
            $retorno = $this->db->query($sql)->result();

            //var_dump( $retorno );

            if ($retorno[0]->total == 0)
                return true;

            return false;
        }

        public function CriarSenha( $email, $senha, $usuario) {

            if ( $this->ValidaUsuario( $email, $usuario ) ) {
                $sql= "
                        UPDATE usuario 
                            SET senha='" . $senha . "'
                        WHERE email='" . $email . "'
                            AND usuario='" . $usuario . "'
                    ";
                try {
                    $this->db->query($sql);
                    return true;
                }
                catch (Exception $ex) {
                    return false;
                }
            }
            return false;
        }

        public function ValidaUsuario( $email, $usuario ) {
            $sql = "SELECT count(1) as total 
                FROM usuario
                WHERE email='" . $email . "'
                    AND usuario='" . $usuario . "'
                ";
            $retorno = $this->db->query($sql)->result();

            //var_dump( $retorno );

            if ($retorno[0]->total == 0) {//Não encontrou
                return false;
            }

            return true;
        }

        public function ValidaLogin( $email, $senha ) {
            $sql= "SELECT COUNT(1) as total FROM usuario 
                    WHERE email='" . $email . "' 
                        AND senha='" . $senha . "'";

            $retorno = $this->db->query($sql)->result();

            if ( $retorno[0]->total == 0) { //Não encontrou
                return false;
            }

            return true;
        }

        public function selecionarTodos() {
            $retorno = $this->db->query("
                                    SELECT * FROM usuario");
            return $retorno->result();
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM usuario WHERE id=" . $id );
            return $retorno->result();
        }

        public function salvaraltercao( $id, $usuario, $senha, $email) {
            $sql = "UPDATE usuario 
                    SET
                    usuario = '" . $usuario . "',
                        senha = '" . $senha. "',
                        email = '" . $email .  "'
                    WHERE id= " . $id . "
                ";

                $this->db->query( $sql );

            return true;
        }

        public function excluir($id) {
            $sql="DELETE FROM usuario WHERE id=" . $id;
            $this->db->query( $sql );
            return true;
        }
    }

    
?>





