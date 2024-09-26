<?php

class Funcionario
{
    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $departamento;

    public function __toString()
    {
        return "\n\nNome: " . $this->nome . "\nCargo: " . $this->cargo . "\nSalário: " . $this->salario . "\nDepartamento: " . $this->departamento;        
    }

    public function __construct($n,$c,$s,$d)
    {
        $this->nome = $n;
        $this->cargo = $c;
        $this->salario = $s;
        $this->departamento = $d;
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

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    public function getDepartamento(): Departamento
    {
        return $this->departamento;
    }

    public function setDepartamento(Departamento $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }
}
