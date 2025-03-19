<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RujukMasuk $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rujuk Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rujuk-masuk-view">

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
            'perujuk',
            'alamat',
            'no_rujuk',
            'jm_perujuk',
            'dokter_perujuk',
            'kd_penyakit',
            'kategori_rujuk',
            'keterangan',
            'no_balasan',
        ],
    ]) ?>

</div>
