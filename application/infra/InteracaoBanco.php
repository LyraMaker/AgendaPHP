<?php
namespace application\infra;

interface InteracaoBanco{
    public function inserir($dado,$banco);
    public function atualizar($dado,$banco);
    public function deletar($dado,$banco);
    public function listar($dado,$banco);
    public function listarTodos($banco);
}