<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirim2 $model */

$this->title = $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Data Terkirim2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inacbg-data-terkirim2-view">

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
            'nik',
        ],
    ]) ?>

</div>
