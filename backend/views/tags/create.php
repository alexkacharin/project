<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tags */

$this->title = 'Форма для создания тэга:';
$this->params['breadcrumbs'][] = ['label' => 'Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-index">
    <div class = "container">
        <div class="row">
            <div class="col-md-8" style="background: white;border-radius: 10px;">
<div class="tags-create">

    <h2>Информация</h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
            </div>
        </div>
</div>
