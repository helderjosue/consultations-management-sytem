<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipo */

$this->title = 'Actualizar Tipo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
