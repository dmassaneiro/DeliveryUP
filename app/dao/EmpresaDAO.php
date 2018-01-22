<?php

class EmpresaDAO {

    public function Inserir(Empresa $obj) {
        try {
            $sql = "INSERT INTO empresa (                   
                  nome,
                  telefone1,
                  telefone2,
                  cnpj,
                  anosMercado,
                  email,
                  logo,
                  sobre,
                  missao,
                  sit,
                  senha)
                  VALUES (
                  :nome,
                  :telefone1,
                  :telefone2,
                  :cnpj,
                  :anosMercado,
                  :email,
                  :logo,
                  :sobre,
                  :missao,
                  :sit,
                  :senha)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":telefone1", $obj->getTelefone1());
            $p_sql->bindValue(":cnpj", $obj->getCnpj());
            $p_sql->bindValue(":telefone2", $obj->getTelefone2());
            $p_sql->bindValue(":anosMercado", $obj->getAnos());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":logo", $obj->getLogo());
            $p_sql->bindValue(":sobre", $obj->getSobre());
            $p_sql->bindValue(":missao", $obj->getMissao());
            $p_sql->bindValue(":sit", $obj->getSit());
            $p_sql->bindValue(":senha", $obj->getSenha());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }

    public function Editar(Empresa $obj) {
        try {
            $sql = "UPDATE empresa set
                
                  nome=:nome,
                  telefone1=:telefone1,
                  telefone2=:telefone2,
                  cnpj=:cnpj,
                  anosMercado=:anosMercado,
                  email=:email,
                  logo=:logo,
                  sobre=:sobre,
                  missao=:missao
                                                                       
                  WHERE id = :id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":cnpj", $obj->getCnpj());
            $p_sql->bindValue(":telefone1", $obj->getTelefone1());
            $p_sql->bindValue(":telefone2", $obj->getTelefone2());
            $p_sql->bindValue(":anosMercado", $obj->getAnos());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":logo", $obj->getLogo());
            $p_sql->bindValue(":sobre", $obj->getSobre());
            $p_sql->bindValue(":missao", $obj->getMissao());
            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }
    public function EditarSemLogo(Empresa $obj) {
        try {
            $sql = "UPDATE empresa set
                
                  nome=:nome,
                  telefone1=:telefone1,
                  telefone2=:telefone2,
                  cnpj=:cnpj,
                  anosMercado=:anosMercado,
                  email=:email,
                  logo=:logo,
                  sobre=:sobre,
                  missao=:missao
                                                                       
                  WHERE id = :id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":cnpj", $obj->getCnpj());
            $p_sql->bindValue(":telefone1", $obj->getTelefone1());
            $p_sql->bindValue(":telefone2", $obj->getTelefone2());
            $p_sql->bindValue(":anosMercado", $obj->getAnos());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":logo", $obj->getLogo());
            $p_sql->bindValue(":sobre", $obj->getSobre());
            $p_sql->bindValue(":missao", $obj->getMissao());
            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }

    public function Deletar($Id) {
        try {
            $sql = "DELETE FROM empresa WHERE id = :cod";
            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $Id);

            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Escluir<br> $e";
        }
    }

    public function VerificaLogin($email, $senha) {
        try {
            $sql = "SELECT * FROM empresa WHERE email = '$email' AND senha= '$senha' AND sit= 'A' limit 1";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    public function BuscarTodos($id) {
        try {
            $sql = "SELECT * FROM empresa WHERE id= '$id' order by id asc";
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

    public function BuscarDadosEmpresa($id) {
        try {
            $sql = "SELECT * FROM empresa WHERE id= '$id' order by id asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }
    public function BuscarImagem($id) {
        try {
            $sql = "SELECT * FROM empresa WHERE id= '$id' order by id asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
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
            $sql = "SELECT count(id) as id FROM empresa WHERE id ='$id' order by id asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->ListaCount($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    private function ListaCount($row) {
        $obj = new Empresa();
        $obj->setId($row['id']);
        return $obj;
    }

    private function Lista($row) {
        $obj = new Empresa();
        $obj->setAnos($row['anosMercado']);
        $obj->setCnpj($row['cnpj']);
        $obj->setEmail($row['email']);
        $obj->setId($row['id']);
        $obj->setLogo($row['logo']);
        $obj->setMissao($row['missao']);
        $obj->setNome($row['nome']);
        $obj->setSenha($row['senha']);
        $obj->setSit($row['sit']);
        $obj->setSobre($row['sobre']);
        $obj->setTelefone1($row['telefone1']);
        $obj->setTelefone2($row['telefone2']);


        return $obj;
    }

}
