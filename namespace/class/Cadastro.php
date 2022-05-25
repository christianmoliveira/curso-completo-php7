<?php

class Cadastro
{
    private $nome;
    private $email;
    private $senha;

    /**
     * @return mixed
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        return json_encode([
            'nome' => $this->getNome(),
            'email' => $this->getEmail(),
            'senha' => $this->getSenha(),
        ]);
    }
}