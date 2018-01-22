<?php

class ProdutoDAO {

    public function Inserir(Produto $obj) {
        try {
            $sql = "INSERT INTO produtos (                   
                  nome,
                  descricao,
                  valor,
                  sit,
                  tipoProduto_id,
                  empresa_id,
                  imagem)
                  VALUES (
                  :nome,
                  :descricao,
                  :valor,
                  :sit,
                  :tipoProduto_id,
                  :empresa_id,
                  :imagem)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":valor", $obj->getValor());
            $p_sql->bindValue(":sit", $obj->getSituacao());
            $p_sql->bindValue(":tipoProduto_id", $obj->getTipoproduto());
            $p_sql->bindValue(":empresa_id", $obj->getEmpresa_id());
            $p_sql->bindValue(":imagem", $obj->getImagem());


            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }

    public function Editar(Produto $obj) {
        try {
            $sql = "UPDATE produtos set
                
                  nome=:nome,
                  descricao=:descricao,
                  valor=:valor,
                  tipoProduto_id=:tipoProduto_id,
                  imagem=:imagem
                                                                       
                  WHERE id = :id AND empresa_id = :empresa_id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":valor", $obj->getValor());
            $p_sql->bindValue(":tipoProduto_id", $obj->getTipoproduto());
            $p_sql->bindValue(":imagem", $obj->getImagem());

            $p_sql->bindValue(":empresa_id", $obj->getEmpresa_id());
            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }
    public function EditarSemImagem(Produto $obj) {
        try {
            $sql = "UPDATE produtos set
                
                  nome=:nome,
                  descricao=:descricao,
                  valor=:valor,
                  tipoProduto_id=:tipoProduto_id
                  
                                                                       
                  WHERE id = :id AND empresa_id = :empresa_id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":valor", $obj->getValor());
            $p_sql->bindValue(":tipoProduto_id", $obj->getTipoproduto());
//            $p_sql->bindValue(":imagem", $obj->getImagem());

            $p_sql->bindValue(":empresa_id", $obj->getEmpresa_id());
            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }

    public function Desativar(Produto $obj) {
        try {
            $sql = "UPDATE produtos set
                
                  sit=:sit
                                                                       
                  WHERE id = :produtos_id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);

            $p_sql->bindValue(":sit", $obj->getSituacao());

            $p_sql->bindValue(":produtos_id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }

    public function Deletar($Id) {
        try {
            $sql = "DELETE FROM produtos WHERE id = :cod";
            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $Id);

            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Escluir<br> $e";
        }
    }

    public function BuscarTodos($id) {
        try {
            $sql = "SELECT * FROM produtos WHERE empresa_id= '$id' AND sit= 'A' order by id asc";
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
    public function BuscarTodosInativo($id) {
        try {
            $sql = "SELECT * FROM produtos WHERE empresa_id= '$id' AND sit= 'I' order by id asc";
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

    public function BuscarDados($id,$empresa) {
        try {
            $sql = "SELECT * FROM produtos WHERE id ='$id' and empresa_id='$empresa' limit 1";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

    public function PegaId($id) {
        try {
            $sql = "SELECT id  FROM produtos WHERE empresa_id ='$id' order by id desc limit 1";
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
        $obj = new Produto();
        $obj->setId($row['id']);
        $obj->setDescricao($row['descricao']);
//        $obj->setEmpresa_id($row['empresao_id']);
        $obj->setNome($row['nome']);
        $obj->setSituacao($row['sit']);
        $obj->setTipoproduto($row['tipoProduto_id']);
        $obj->setValor($row['valor']);
        $obj->setImagem($row['imagem']);

        return $obj;
    }

}
