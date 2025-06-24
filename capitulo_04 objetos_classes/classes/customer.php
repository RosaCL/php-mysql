<?php

class Customer{
    public string $name;
    public string $lastname;
    public string $email;
    private string $senha;
    public array $accounts;

    public function __construct(string $name, string $lastname, string $email, string $senha, array $accounts)
    {
        $this->name=$name;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->senha=$senha;
        $this->accounts=$accounts;
    }

    function NomeComleto() :string {
        return $this-> name . ' ' . $this->lastname;
    }
}
?>