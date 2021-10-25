<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = 'Форма для добавления тэгов:';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">
    <div class = "container">
        <div class="row">
            <div class="col-md-6" style="background: white;border-radius: 10px;">
                <h2>Тэги</h2>

                <?php $form = ActiveForm::begin(); ?>

                <?= Html::dropDownList('tags',$selectedTags,$tags, ['class'=>'form-control', 'multiple'=>true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
