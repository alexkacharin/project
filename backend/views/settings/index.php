<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Справочник';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">
    <div class = "container">
        <div class="row">
            <div class="col-md-10" style="background: white;border-radius: 10px;">
<div class="settings-index">



    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute' => 'key','label' => 'Ключ'],
            ['attribute' => 'value','label' => 'Значение'],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
            </div>
        </div>
</div>
