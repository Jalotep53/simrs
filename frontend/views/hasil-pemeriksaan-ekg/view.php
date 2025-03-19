<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanEkg $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Ekgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-pemeriksaan-ekg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'no_rawat',
            'tanggal',
            'kd_dokter',
            'diagnosa_klinis',
            'kiriman_dari',
            'irama',
            'laju_jantung',
            'gelombangp',
            'intervalpr',
            'axis',
            'kompleksqrs',
            'segmenst',
            'gelombangt',
            'kesimpulan',
        ],
    ]) ?>

</div>
