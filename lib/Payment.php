<?php

class Payment extends \atk4\data\Model {
    public $title_field = 'date';
    public $table = 'payment';

    public function init()
    {
        parent::init();

        $this->hasOne('supplier_id', [new Supplier(), 'mandatory' => true]);

        $this->addField('date', ['type' => 'date', 'mandatory' => true]);
        $this->addField('amount', ['type' => 'money', 'mandatory' => true]);
    }
}
