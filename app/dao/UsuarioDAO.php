<?php

class UsuarioDAO {

    public function Inserir(Usuario $obj) {
        try {
            $sql = "INSERT INTO usuario (                   
                  nome,
                  email,
                  senha,
                  dataNascimento,
                  cpf,
                  imagem)
                  VALUES (
                  :nome,
                  :email,
                  :senha,
                  :dataNascimento,
                  :cpf,
                  :imagem)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":senha", $obj->getSenha());
            $p_sql->bindValue(":dataNascimento", $obj->getDataNascimento());
            $p_sql->bindValue(":cpf", $obj->getCpf());
            $p_sql->bindValue(":imagem", $obj->getImagem());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }

    public function Editar(Usuario $obj) {
        try {
            $sql = "UPDATE usuario set
                
                  nome=:nome,
                  email=:email,
                  senha=:senha,
                  dataNascimento=:dataNascimento,
                  cpf=:cpf,
                  imagem=:imagem
                                                                       
                  WHERE id = :id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":senha", $obj->getSenha());
            $p_sql->bindValue(":dataNascimento", $obj->getDataNascimento());
            $p_sql->bindValue(":cpf", $obj->getCpf());
            $p_sql->bindValue(":imagem", $obj->getImagem());

            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }

    public function Deletar($Id) {
        try {
            $sql = "DELETE FROM usuario WHERE id = :cod";
            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $Id);

            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Escluir<br> $e";
        }
    }

    public function BuscarTodos() {
        try {
            $sql = "SELECT * FROM usuario order by nome asc";
            $result = ConexaoPDO::getInstance()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->ListaLogin($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
    
    public function BuscarDados($id) {
        try {
            $sql = "SELECT * FROM usuario WHERE id ='$id' order by nome asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->ListaLogin($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    public function VerificaLogin($email, $senha) {
        try {
            $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha= '$senha' limit 1";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->ListaLogin($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    private function ListaLogin($row) {
        $obj = new Usuario();
        $obj->setId($row['id']);
        $obj->setEmail($row['email']);
        $obj->setSenha($row['senha']);
        $obj->setNome($row['nome']);
        $obj->setDataNascimento($row['dataNascimento']);
        $obj->setCpf($row['cpf']);
        $obj->setImagem($row['imagem']);
        $obj->setDataCadastro($row['dataCadastro']);
        $obj->setTelefone1($row['telefone1']);
        $obj->setTelefone2($row['telefone2']);
        $obj->setTelefone3($row['telefone3']);
               
        return $obj;
    }

}
