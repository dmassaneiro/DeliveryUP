<?php

class CategoriaDAO {

    public function Inserir(Categoria $obj) {
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
            $sql = "SELECT * FROM tipoproduto order by descricao asc";
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
            $sql = "SELECT * FROM tipoproduto WHERE descricao ='$id' order by descricao asc";
            $p_sql = ConexaoPDO::getInstance()->query($sql);
            $p_sql->execute();
            return $this->ListaLogin($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar." . $e;
        }
    }

  

    private function ListaLogin($row) {
        $obj = new Categoria();
        $obj->setId($row['id']);
        $obj->setDescricao($row['descricao']);
        $obj->setSit($row['sit']);
        
               
        return $obj;
    }

}
