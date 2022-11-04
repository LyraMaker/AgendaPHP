<?php
namespace application\model;

class Contato {
    private int $id;
    private string $nome;
    private string $sobrenome;
    private string $email;
    private string $telefone;
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

}