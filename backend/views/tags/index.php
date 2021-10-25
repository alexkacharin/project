<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тэги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-index">
    <div class = "container">
        <div class="row">
            <div class="col-md-8" style="background: white;border-radius: 10px;">
    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //['attribute'=>'id','label'=>'Номер в базе'],
            ['attribute'=>'title','label'=>'Тэг'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
                <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
        </div>
    </div>

</div>
