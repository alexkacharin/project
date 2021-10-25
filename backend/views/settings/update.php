<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Settings */

$this->title = 'Изменить справочник: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-create">
    <div class = "container">
        <div class="row">
            <div class="col-md-10" style="background: white;border-radius: 10px;">
<div class="settings-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
            </div>
        </div>
</div>
