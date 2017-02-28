<?php

require 'init.php';

// list
$app->layout->add(['Header', 'Suppliers list']);

// add new button
$b = $app->layout->add(['Button', 'New Supplier']);
$b->link('supplier.php');

// add grid
$g = $app->layout->add('Grid');
$m = new Supplier($app->db);
$g->setModel($m);

// add edit button column
$g->addColumn($m->title_field, new \atk4\ui\Column\Link(['supplier.php?id={$id}']));

//echo $g->model->action('select')->getDebugQuery(true);
