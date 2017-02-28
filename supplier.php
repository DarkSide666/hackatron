<?php

require 'init.php';

// header
$app->layout->add(['Header', 'Edit Supplier']);

// add form
$f = $app->layout->add(['Form', 'segment']);

$m = new Supplier($app->db);
if (isset($_GET['id'])) {
    $m->load($_GET['id']);
}
$f->setModel($m);

// save form
$f->onSubmit(function($form) {
    // validate not-null
    $m = $form->model;
    foreach ($m->elements as $el) {
        if ($el instanceof \atk4\data\Field && $el->mandatory && !$m[$el->short_name]) {
            return $form->error($el->short_name, 'Mandatory field');
        }
    }

    // save
    $m->save();

    return new \atk4\ui\jsExpression('document.location="suppliers_list.php"');
});
