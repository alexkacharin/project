<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsTags */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-tags-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_news')->textInput() ?>

    <?= $form->field($model, 'id_tags')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
