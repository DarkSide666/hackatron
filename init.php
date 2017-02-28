<?php
require 'vendor/autoload.php';

// Initialize app
$app = new \atk4\ui\App('Suppliers APP');
$app->initLayout('Admin');

// connection
$app->db = \atk4\data\Persistence_SQL::connect('mysql:dbname=hackatron;host=localhost;charset=utf8','root','');

// layout left menu
$app->layout->leftMenu->addItem(['Dashboard', 'icon'=>'dashboard'], 'index');
$app->layout->leftMenu->addItem(['Suppliers', 'icon'=>'list'], 'suppliers_list');
$app->layout->leftMenu->addItem(['Invoices', 'icon'=>'list'], 'invoices_list');
$app->layout->leftMenu->addItem(['Payments', 'icon'=>'list'], 'payments_list');
