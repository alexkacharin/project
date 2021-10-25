<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1>Редактирование статей</h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="news-create">
        <div class = "container">
            <div class="row">
                <div class="col-md-10" style="background: white;border-radius: 10px;">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],
          //  ['attribute'=>'id','label'=>'Номер в базе'],
            ['attribute'=>'title','label'=>'Заголовок'],
            ['attribute'=>'short_description','label'=>'Краткое описание'],
            ['attribute'=>'description','label'=>'Описание'],
            ['attribute'=>'content','label'=>'Контент'],
            //'created_at',
            //'status',
            //'created_by',
            //'new_tag_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
        </div>
    </div>
</div>
