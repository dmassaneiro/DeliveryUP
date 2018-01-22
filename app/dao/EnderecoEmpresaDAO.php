<?php

class EnderecoEmpresaDAO {

    public function Inserir(EnderecoEmpresa $obj) {
        try {
            $sql = "INSERT INTO enderecoempresa (                   
                  cep,
                  endereco,
                  bairro,
                  numero,
                  cidade,
                  estado,
                  complemento,
                  empresa_id)
                  VALUES (
                  :cep,
                  :endereco,
                  :bairro,
                  :numero,
                  :cidade,
                  :estado,
                  :complemento,
                  :empresa_id)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cep", $obj->getCep());
            $p_sql->bindValue(":endereco", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":estado", $obj->getEstado());
            $p_sql->bindValue(":complemento", $obj->getComplemento());
            $p_sql->bindValue(":empresa_id", $obj->getEmpresa_id());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }

    public function Editar(EnderecoEmpresa $obj) {
        try {
            $sql = "UPDATE enderecoempresa set
                
                  cep=:cep,
                  endereco=:endereco,
                  bairro=:bairro,
                  numero=:numero,
                  cidade=:cidade,
                  estado=:estado,
                  complemento=:complemento
                                                                       
                  WHERE empresa_id = :empresa_id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cep", $obj->getCep());
            $p_sql->bindValue(":endereco", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":estado", $obj->getEstado());
            $p_sql->bindValue(":complemento", $obj->getComplemento());

            $p_sql->bindValue(":empresa_id", $obj->getEmpresa_id());
//            $p_sql->bindValue(":id", $obj->getId());

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
            $sql = "SELECT * FROM enderecoempresa WHERE empresa_id ='$id' order by id asc limit 1";
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
        $obj = new EnderecoEmpresa();
        $obj->setId($row['id']);
        $obj->setCep($row['cep']);
        $obj->setCidade($row['cidade']);
        $obj->setComplemento($row['complemento']);
        $obj->setEstado($row['estado']);
        $obj->setBairro($row['bairro']);
        $obj->setNumero($row['numero']);
        $obj->setRua($row['endereco']);
        $obj->setEmpresa_id($row['empresa_id']);


        return $obj;
    }

}
