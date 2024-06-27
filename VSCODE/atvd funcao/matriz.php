<?php 
$dado = array (

    array("nome" => "João", "idade" => 10),
    array("nome" => "Pedro", "idade" => 20),
    array("nome" => "Maria", "idade" => 50),
    array("nome" => "Lucas", "idade" => 2),
);

    foreach($dado as $d){
        echo "\nNome: ".$d['nome']. "Idade: ".$d['idade'];
    }
?>