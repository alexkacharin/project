<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="news-view">
    <div class = "container">
        <div class="row">
            <div class="col-md-10" style="background: white;border-radius: 10px;">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Добавить тэги', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            ['attribute'=>'title','label'=>'Описание'],
            ['attribute'=>'short_description','label'=>'Краткое описание'],
            ['attribute'=>'description','label'=>'Описание'],
            ['attribute'=>'content','label'=>'Контент'],
            ['attribute'=>'created_at','label'=>'Дата создания:'],
            ['attribute'=>'status','label'=>'Статус'],
            ['attribute'=>'created_by','label'=>'Отредактированно:'],
            //['attribute'=>'new_tag_id','label'=>'Тэг'],
        ],
    ]) ?>
            </div>
        </div>
    </div>
</div>
