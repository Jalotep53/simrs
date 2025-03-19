<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\LogDukcapilAceh $model */

$this->title = $model->no_ktp;
$this->params['breadcrumbs'][] = ['label' => 'Log Dukcapil Acehs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="log-dukcapil-aceh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_ktp' => $model->no_ktp, 'tanggal' => $model->tanggal, 'user' => $model->user], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_ktp' => $model->no_ktp, 'tanggal' => $model->tanggal, 'user' => $model->user], [
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
            'no_ktp',
            'tanggal',
            'user',
        ],
    ]) ?>

</div>
