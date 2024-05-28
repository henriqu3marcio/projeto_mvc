<?php

class Projeto
{
    private$id;
    private $nome;
    private$duracao;
    private $con;

    
}
public function__construct($id=null, $nome=null, $duracao=null)
{
    $this->id = $id;
    $this->nome = $nome;
    $this->duracao = $duracao;

    $this->con = new PDO (SERVIRDOR, SUARIO, SENHA);

}
public function all(){
    $sql = $this->con->prepare('Select * FROM ver_projeo');
    $sql->execute();
    $rows = $sql->fetchALL (PDO::   FETCH_CALLS);
    RETURN $ROWS;
}
public functio create (){
    $sql = $this->con->prepare('UPDATE projeto SET nome=?, duracao=?
    where id=?');
    $sql->execute([$this->nome, $this->duracao, $this->id]);
}

public function delete(){
    $sql = $this->con->prepare('DELETE FROM projeto WHERE id=?');
    $sql->execute([$this->id]);
    $row = $sql->fetchObject();
    return $row;
}

public function update(){
        $sql = $this->con->prepare("UPDATE projeto SET nome=?, duracao=?
        WHERE id= ?");
        $sql->execute
}