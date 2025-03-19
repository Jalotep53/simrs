<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsBatal $model */

$this->title = $model->nobooking;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Mobilejkn Bpjs Batals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="referensi-mobilejkn-bpjs-batal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nobooking' => $model->nobooking], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nobooking' => $model->nobooking], [
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
            'no_rkm_medis',
            'no_rawat_batal',
            'nomorreferensi',
            'tanggalbatal',
            'keterangan',
            'statuskirim',
            'nobooking',
        ],
    ]) ?>

</div>
