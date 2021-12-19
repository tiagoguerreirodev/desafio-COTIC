<?php
require_once "SQLDriver.php";

class Personagem {
    public $nome;
    public $idade;
    public $interprete;
    public $alinhamento;
    public $biografia;

    /**
     * Esta função insere um novo objeto da classe Personagem no banco de dados.
     * 
     * @param Personagem $personagem Entidade a ser inserida no banco de dados.
     */
    public static function inserir(Personagem $personagem) {
        return SQLDriver::insertPersonagem($personagem->nome,$personagem->idade,$personagem->interprete,$personagem->alinhamento,$personagem->biografia);
    }

    /**
     * Esta função retorna todas as entidades Personagem presentes na tabela 'personagens'.
     * 
     * @param Personagem[] Array com todos os personagens do banco.
     */
    public static function obterTodos() {
        return SQLDriver::selectAllEntities("personagens","Personagem");
    }
}
?>