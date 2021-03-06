<?php
class Iteracao extends Lumine_Base{
    protected $_tablename = 'iteracoes';
    protected $_package   = 'model';
    protected function _initialize() {
        $this->_addField('id_iteracao', 'id_iteracao', 'tinyint', 4, array('primary' => true, 'notnull' => true, 'autoincrement' => true));
        $this->_addField('resposta', 'resposta', 'text', null, array());
		$this->_addField('momento_resposta', 'momento_resposta', 'timestamp', null, array());
		$this->_addField("id_requisicao", "id_requisicao", "int", 10, array('notnull' => true, 'foreign' => '1', 'onUpdate' => 'CASCADE', 'onDelete' => 'CASCADE', 'linkOn' => 'id_requisicao', 'class' => 'Requisicao'));
		$this->_addField("id_usuario", "id_usuario", "int", 10, array('notnull' => true, 'foreign' => '1', 'onUpdate' => 'CASCADE', 'onDelete' => 'CASCADE', 'linkOn' => 'id_usuario', 'class' => 'Usuario'));
    }
}
?>