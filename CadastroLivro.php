<?php

class CadastroLivro
{
    public $NomeLivro;
    public $Autor;
    public $Editora;

    function setBiblioteca($NomeLivro, $Autor, $Editora)
    {
        $this->NomeLivro = $NomeLivro;
        $this->Autor = $Autor;
        $this->Editora = $Editora;
    }

    function verLivro()
    {
        return $this->NomeLivro;
    }
    function verAutor()
    {
        return $this->Autor;
    }
    function verEditora()
    {
        return $this->Editora;
    }

    function getBiblioteca()
    {
        return "Livro: {$this->NomeLivro} <br> Autor: {$this->Autor} <br> Editora: {$this->Editora}<hr>";
    }
}
