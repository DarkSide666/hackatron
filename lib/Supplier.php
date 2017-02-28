<?php

class Supplier extends \atk4\data\Model {
    public $table = 'supplier';

    public function init()
    {
        parent::init();

        $this->addField('name', ['type' => 'string', 'mandatory' => true]);
        $this->addField('address');

        $this->hasMany('Invoice', new Invoice())
            ->addField('invoice_total', ['aggregate' => 'sum', 'field'=>'total', 'type'=>'money']);
        $this->hasMany('Payment', new Payment())
            ->addField('payment_total', ['aggregate' => 'sum', 'field'=>'amount', 'type'=>'money']);
    }
}
