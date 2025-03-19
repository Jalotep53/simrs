<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage1 $model */

$this->title = $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Grouping Stage1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inacbg-grouping-stage1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_sep' => $model->no_sep], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_sep' => $model->no_sep], [
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
            'no_sep',
            'code_cbg',
            'deskripsi',
            'tarif',
        ],
    ]) ?>

</div>
