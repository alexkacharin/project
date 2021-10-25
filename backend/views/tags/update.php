<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tags */

$this->title = 'Редактирование: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tags-index">
    <div class = "container">
        <div class="row">
            <div class="col-md-8" style="background: white;border-radius: 10px;">
<div class="tags-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
            </div>
        </div>
</div>
