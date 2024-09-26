<?php

require_once("modelos/Fabricante.php");
require_once("modelos/Carro.php");

$fabricante1 = new Fabricante("Volkswagem", "VW");
$fabricante2 = new Fabricante("Chevrolet", "GM");
$fabricante3 = new Fabricante("Fiat", "F");
$fabricante4 = new Fabricante("Renault", "RN");

$fabricantes = array($fabricante1, $fabricante2, $fabricante3, $fabricante4);
$carros = array();

$escolha = 0;

do {
    print "\n-----------MENU-----------\n";
    print "1- Cadastrar carro\n";
    print "2- Excluir carro\n";
    print "3- Listar carros\n";
    print "0- SAIR\n";
    $escolha = readline("Escolha a opção: ");
    switch ($escolha) 
    {

        case 1:
            $carro = new Carro(readline("Insira o modelo: "), readline("Insira o ano de fabricação: "));

            foreach($fabricantes as $f)
            {   
                Listar($fabricantes);
                $opcao = readline("Insira a sua escolha atráves da sigla: ");

                if ($opcao == $f->getSigla()) 
                {
                    $carro->setFabricante($f);
                    break;
                }else{
                    print "\nA sigla informada não pertence a nenhum fabricante...";
                }
            }
            array_push($carros, $carro);
        break;

        case 2:
            $indice = readline("Insira o carro que deseja remover: ");
            array_slice($carros, $indice);
            //arrumar essa
        break;

        case 3:
            Listar($carros);
        break;
        
        default:
            print "A opção não existe";
        break;
    }
} while ($escolha != 0);

function Listar($array)
{   
    foreach($array as $a)
    {
        print $a . "\n";
    }

}