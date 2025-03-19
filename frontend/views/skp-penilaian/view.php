<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkpPenilaian $model */

$this->title = $model->nomor_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Skp Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skp-penilaian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nomor_penilaian' => $model->nomor_penilaian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nomor_penilaian' => $model->nomor_penilaian], [
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
            'nomor_penilaian',
            'nik_dinilai',
            'nik_penilai',
            'tanggal',
            'keterangan',
            'status',
        ],
    ]) ?>

</div>
