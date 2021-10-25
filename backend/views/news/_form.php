<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

            <div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ->label('Заголовок')?>

    <?= $form->field($model, 'short_description')->textInput(['maxlength' => true])->label('Краткое описание') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ->label('Описание')?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6])->label('Контент') ?>

    <?= $form->field($model, 'created_at')->textInput()->label('Дата обновления') ?>

    <?= $form->field($model, 'status')->textInput() ->label('Статус')?>

    <?= $form->field($model, 'created_by')->textInput()   ->label('Редактировано:')?>

    <?php  $form->field($model, 'new_tag_id')->textInput() ->label('Тэги')?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>