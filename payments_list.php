<?php

require 'init.php';

// list
$app->layout->add(['Header', 'Payments list']);

// add new button
$b = $app->layout->add(['Button', 'New Payment']);
$b->link('payment.php');

// add grid
$g = $app->layout->add('Grid');
$m = new Payment($app->db);
$g->setModel($m);

// add edit button column
$g->addColumn($m->title_field, new \atk4\ui\Column\Link(['payment.php?id={$id}']));
