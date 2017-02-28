<?php

require 'init.php';

// list
$app->layout->add(['Header', 'Invoices list']);

// add new button
$b = $app->layout->add(['Button', 'New Invoice']);
$b->link('invoice.php');

// add grid
$g = $app->layout->add('Grid');
$m = new Invoice($app->db);
$g->setModel($m);

// add edit button column
$g->addColumn($m->title_field, new \atk4\ui\Column\Link(['invoice.php?id={$id}']));


