<?php

class TipoProdutoDAO {

    public function Inserir(TipoProduto $obj) {
        try {
            $sql = "INSERT INTO tipoproduto (                   
                  descricao,
                  sit)
                  VALUES (
                  :descricao,
                  :sit)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":sit", $obj->getSit());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }
    

    public function Editar(Usuario $obj) {
        try {
            $sql = "UPDATE tipoproduto set
                
                  descricao=:descricao,
                  sit=:sit
                                                                       
                  WHERE id = :id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":sit", $obj->getSit());

            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }

    public function Deletar($Id) {
        try {
            $sql = "DELETE FROM tipoproduto WHERE id = :cod";
            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $Id);

            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Escluir<br> $e";
        }
    }

    public function PegaNome($id) {
        try {
            $sql = "SELECT *  FROM tipoproduto WHERE id ='$id' order by id desc limit 1";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->ListaCount($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }
    public function BuscarTodos() {
        try {
            $sql = "SELECT * FROM tipoproduto WHERE sit = 'A' order by descricao asc";
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
    public function BuscarTodosMenos($id) {
        try {
            $sql = "SELECT * FROM tipoproduto WHERE sit = 'A' AND id<>'$id' order by descricao asc";
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


    private function Lista($row) {
        $obj = new TipoProduto();
        $obj->setId($row['id']);
        $obj->setDescricao($row['descricao']);
        $obj->setSit($row['sit']);
        
        return $obj;
    }
    private function ListaCount($row) {
        $obj = new TipoProduto();
        $obj->setId($row['id']);
        $obj->setDescricao($row['descricao']);
                
        return $obj;
    }

}
