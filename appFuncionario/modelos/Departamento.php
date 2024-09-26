<?php

class Departamento
{
    private string $nome;
    private int $numero;

    public function __toString()
    {
        return "\nNúmeroDepartamento: " . $this->numero . "\nNomeDepartamento: " . $this->numero;
    }

    public function __construct($n,$num)
    {
        $this->nome = $n;
        $this->numero = $num;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
}