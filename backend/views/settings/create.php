<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Settings */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">
    <div class = "container">
        <div class="row">
            <div class="col-md-10" style="background: white;border-radius: 10px;">
<div class="settings-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
            </div>
        </div>
</div>
