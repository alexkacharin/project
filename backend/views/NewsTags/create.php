<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsTags */

$this->title = 'Create News Tags';
$this->params['breadcrumbs'][] = ['label' => 'News Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-tags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
