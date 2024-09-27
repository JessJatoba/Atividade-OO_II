<?php
class Vinho {
    private $nome;
    private $tipo;
    private $safra;
    private $preco;

    // Métodos de acesso (getters e setters)
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setsafra($safra) {
        $this->safra = $safra;
    }

    public function getsafra() {
        return $this->safra;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }

    // Método para mostrar todos os dados do vinho
    public function mostrarVinho() {
        return "Nome: $this->nome\nTipo: $this->tipo\nSafra: $this->safra\nPreço: R$ $this->preco";
    }

    // Método para verificar se o preço é menor que 25
    public function verificarPreco($preco) {
        return $preco < 25;
    }
}
?>
