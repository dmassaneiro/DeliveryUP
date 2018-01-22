<?php

class ImagemProdutoDAO {

    public function Inserir(ImagemProduto $obj) {
        try {
            $sql = "INSERT INTO imagemproduto (                   
                  caminho,
                  produtos_id)
                  VALUES (
                  :caminho,
                  :produtos_id)";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":caminho", $obj->getCaminho());
            $p_sql->bindValue(":produtos_id", $obj->getProdut_id());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Inserir <br>" . $e;
        }
    }

    public function Editar(ImagemProduto $obj) {
        try {
            $sql = "UPDATE imagemproduto set
                
                  caminho=:caminho
                                                                       
                  WHERE id = :id";

            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":caminho", $obj->getCaminho());
//            $p_sql->bindValue(":sit", $obj->getSit());

            $p_sql->bindValue(":id", $obj->getId());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br>" . $e;
        }
    }

    public function Deletar($Id) {
        try {
            $sql = "DELETE FROM imagemproduto WHERE id = :cod";
            $p_sql = ConexaoPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $Id);

            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Escluir<br> $e";
        }
    }

    public function BuscarImagemPrincipal($id) {
        try {
            $sql = "SELECT * FROM imagemproduto WHERE produto_id = '$id' order by id asc limit 1";
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
    public function BuscarImagens($pro) {
        try {
            $sql = "SELECT * FROM imagemproduto WHERE produtos_id ='$pro' order by id asc ";
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
    
    public function PegaCaminho($id) {
        try {
            $sql = "SELECT *  FROM imagemproduto WHERE id ='$id' order by id asc limit 1";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }
    public function Pegaid($caminho) {
        try {
            $sql = "SELECT *  FROM imagemproduto WHERE caminho ='$caminho' order by id asc limit 1";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->Lista($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }


    private function Lista($row) {
        $obj = new ImagemProduto();
        $obj->setId($row['id']);
        $obj->setCaminho($row['caminho']);
        $obj->setProdut_id($row['produtos_id']);
        
        return $obj;
    }

}
