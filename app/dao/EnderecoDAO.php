<?php

class EnderecoDAO {

    public function Inserir(Endereco $obj) {
        try {
            $sql = "INSERT INTO endereco (                   
                  cep,
                  rua,
                  bairro,
                  numero,
                  cidade,
                  estado,
                  complemento,
                  usuario_id)
                  VALUES (
                  :cep,
                  :rua,
                  :bairro,
                  :numero,
                  :cidade,
                  :estado,
                  :complemento,
                  :usuario_id)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cep", $obj->getCep());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":estado", $obj->getEstado());
            $p_sql->bindValue(":complemento", $obj->getComplemento());
            $p_sql->bindValue(":usuario_id", $obj->getUsuario_id());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }

    public function Editar(Endereco $obj) {
        try {
            $sql = "UPDATE usuario set
                
                  cep=:cep,
                  rua=:rua,
                  bairro=:bairro,
                  numero=:numero,
                  cidade=:cidade,
                  estado=:estado,
                  complemento=:complemento
                                                                       
                  WHERE id = :id AND usuario_id = :usuario_id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cep", $obj->getCep());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":estado", $obj->getEstado());
            $p_sql->bindValue(":complemento", $obj->getComplemento());

            $p_sql->bindValue(":usuario_id", $obj->getUsuario_id());
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

    public function BuscarTodos($id) {
        try {
            $sql = "SELECT * FROM endereco WHERE usuario_id= '$id' order by id asc";
            $result = ConexaoPDO::getInstance()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->Lista($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function BuscarDados($id) {
        try {
            $sql = "SELECT * FROM endereco WHERE usuario_id ='$id' order by id asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    public function ContaEndereco($id) {
        try {
            $sql = "SELECT count(id) as id FROM endereco WHERE usuario_id ='$id' order by id asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->ListaCount($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    private function ListaCount($row) {
        $obj = new Endereco();
        $obj->setId($row['id']);
        return $obj;
    }

    private function Lista($row) {
        $obj = new Endereco();
        $obj->setId($row['id']);
        $obj->setCep($row['cep']);
        $obj->setCidade($row['cidade']);
        $obj->setComplemento($row['complemento']);
        $obj->setEstado($row['estado']);
        $obj->setBairro($row['bairro']);
        $obj->setNumero($row['numero']);
        $obj->setRua($row['rua']);
        $obj->setUsuario_id($row['usuario_id']);


        return $obj;
    }

}
