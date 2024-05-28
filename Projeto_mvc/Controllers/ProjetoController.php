<?php
require once 'model/Projeto.php';
class ProjetoController
public function al1 () (
$obj = new Projeto);
$projetos = Sobj-›all ();
require once 'view/Projeto_al1. php';
public function create () (
$obi = new Projeto ();
if( isset ($_ POST (' nome?)) )‹
$obj->setNome (§ POST [ ' nome ' ]) ;
$obj-›setDuracao ($_ POST ( 'duracao'1);
$obi-›create ();
$projeto = Sobj-›read():
Yelse (
$projeto = (object) 
'id'=> null;
'nome'
'duracao'
require once 'view/Projeto create.php';
public function reado f
$obj - new Projeto ();
$obj->setld($ GET('id']);
$projeto = $obj->read ();
require once 'view/Projeto read.php';
public function update () l
$obj - new Projeto ();
$obj-›setId($_GET['id'1);
LE( isset ($ _POsT('nome?1) )
$obj->setNome ($ POST | ' nome' ]);
$obj-›setDuracao($_ POSTI 'duracao']);
$obj-›update () ;
)
$projeto = $obj-›read();
require _once 'view/Projeto_update.php';
public function delete () (
$obj = new Projeto ();
$obj-›setid($_GET('id'1);
$obj-›delete (J;
header ("Location: /");