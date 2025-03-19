<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkpDetailPenilaian $model */

$this->title = $model->nomor_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Skp Detail Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skp-detail-penilaian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nomor_penilaian' => $model->nomor_penilaian, 'kode_kriteria' => $model->kode_kriteria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nomor_penilaian' => $model->nomor_penilaian, 'kode_kriteria' => $model->kode_kriteria], [
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
            'kode_kriteria',
            'skala_penilaian',
        ],
    ]) ?>

</div>
