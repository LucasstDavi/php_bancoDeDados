<?php

//--------------------------CONEXÃO COM BANCO DE DADOS--------------------------

try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
} catch (PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
} catch (Exception $e) {
    echo "Erro generico: ".$e->getMessage();
}

// dbname + host
// usuario
// senha

//---------------------------------INSERT----------------------------------------

//FORMA1:
// $res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES (:n, :t, :e)");

// $res->bindValue(":n", "MIRANDA");
// $res->bindValue(":t", "40028922");
// $res->bindValue(":e", "miranda@gmail.com");
// $res->execute();


//FORMA2:
// $pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Rocha', '12345678', 'rocha@gmail.com')");

?>