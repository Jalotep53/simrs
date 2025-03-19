<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiHidung $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Hidungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-endoskopi-hidung-view">

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
            'kondisi_hidung_kanan',
            'kondisi_hidung_kiri',
            'kavum_nasi_kanan',
            'kavum_nasi_kiri',
            'konka_inferior_kanan',
            'konka_inferior_kiri',
            'meatus_medius_kanan',
            'meatus_medius_kiri',
            'septum_kanan',
            'septum_kiri',
            'nasofaring_kanan',
            'nasofaring_kiri',
            'lainlain_kanan',
            'lainlain_kiri',
            'kesimpulan',
        ],
    ]) ?>

</div>
