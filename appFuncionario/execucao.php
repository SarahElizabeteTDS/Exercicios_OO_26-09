<?php
require_once("modelos/Funcionario.php");
require_once("modelos/Departamento.php");

$funcionarios = array();
$funcionario = 0;
for ($i=0; $i < 5; $i++)  
{
    $funcionario = new Funcionario(readline("Insira seu nome: "), readline("Insira seu cargo: "), readline("Insira o valor do seu salário: "), new Departamento(readline("Insira o nome do seu departamento: "), readline("Insira o número do seu departamento: ")));
    array_push($funcionarios, $funcionario);
}

foreach($funcionarios as $f)
{
    print $f;
}