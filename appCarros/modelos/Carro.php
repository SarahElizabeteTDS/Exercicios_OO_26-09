<?php

require_once("Fabricante.php");

class Carro
{
    private string $modelo;
    private int $anoFab;
    private Fabricante $fabricante;

    public function __toString()
    {
        return "\nModelo: " . $this->modelo . "\nAno Fabricação: " . $this->anoFab . "\nFabricante: \n" . $this->fabricante;
    }

    public function __construct($m,$af)
    {
        $this->modelo = $m;
        $this->anoFab = $af;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getAnoFab(): int
    {
        return $this->anoFab;
    }

    public function setAnoFab(int $anoFab): self
    {
        $this->anoFab = $anoFab;

        return $this;
    }

    public function getFabricante(): Fabricante 
    {
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }
}