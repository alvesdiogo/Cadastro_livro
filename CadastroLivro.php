<?php

class CadastroLivro
{
    protected $_nomeLivro;
    protected $_autor;
    protected $_editora;

    public function __construct($nomeLivro, $autor, $editora)
    {
        //ERRADO
        // $this->NomeLivro = $NomeLivro;
        // $this->Autor = $Autor;
        // $this->Editora = $Editora;

        //CORRETO
        $this->setLivro($nomeLivro);
        $this->setAutor($autor);
        $this->setAutor($editora);
    }

    function setLivro($nome)
    {
        $this->_nomeLivro = $nome;
    }
    function setAutor($autor)
    {
        $this->_autor = $autor;
    }
    function setEditora($editora)
    {
        $this->_editora = $editora;
    }

    function getBiblioteca()
    {
        return "Livro: {$this->_nomeLivro} <br> Autor: {$this->_autor} <br> Editora: {$this->_editora}<hr>";
    }
}
