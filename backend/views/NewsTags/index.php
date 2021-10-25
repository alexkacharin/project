<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\NewsTagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-tags-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News Tags', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_news',
            'id_tags',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
