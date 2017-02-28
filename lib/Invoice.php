<?php

class Invoice extends \atk4\data\Model {
    public $table = 'invoice';
    public $title_field = 'number';

    public function init()
    {
        parent::init();

        $this->hasOne('supplier_id', [new Supplier(), 'mandatory' => true]);

        $this->addField('number');
        $this->addField('date', [/*'type' => 'date', */'mandatory' => true]);
        $this->addField('price', ['type' => 'money', 'mandatory' => true]);
        $this->addField('quantity', ['type' => 'float', 'mandatory' => true]);

        $this->addExpression('total', ['[price]*[quantity]', 'type' => 'money']);
    }
}
