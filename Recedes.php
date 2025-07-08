<?php

class Receita
{

    private $descricao;
    private $valor;

    /**
     * Get the value of descricao
     */
    public function getDados()
    {
        $dados = "\nDescrição:" . $this->descricao ."\nValor:" . $this->valor . "\n" ;

        return $dados;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa
{

    private $descricao;
    private $valor;

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

$listaRece = array();

do {

    print "----Menu----\n";
    print "1- Adicionar Receitas\n";
    print "2- Adicionar Despesas\n";
    print "3- Listar receitas\n";
    print "4- Listar despesas\n";
    print "5- Sumarizar\n";
    print "0- Sair\n\n";

    $escolha = readline("Informe um numero:");

    switch ($escolha) {
        case '1':

            $rece = new Receita();

            $rece->setDescricao(readline("O que vai comprar:"));
            $rece->setValor(readline("Qual é o valor:"));

            array_push($listaRece, $rece);

            system('clear');

            break;

        case '3':

            print "\n------Compra------";

            foreach ($listaRece as $a) {
                
                print $a->getDados();
            }

            print "-------------------\n\n";

            break;

        case '2':

            $rece = new Despesa();

            $rece->setDescricao(readline("O que vai comprar:"));
            $rece->setValor(readline("Qual é o valor:"));

            array_push($listaRece, $rece);

            system('clear');


            break;



        case '4':



            break;

        case '5':



            break;


        case '0':



            break;

        default:

            print "invalido";

            break;
    }
} while ($escolha != 0);
