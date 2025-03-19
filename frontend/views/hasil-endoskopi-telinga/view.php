<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelinga $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Telingas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-endoskopi-telinga-view">

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
            'bentuk_liang_telinga_kanan',
            'bentuk_liang_telinga_kiri',
            'kondisi_liang_telinga_kanan',
            'keterangan_kondisi_liang_telinga_kanan',
            'kondisi_liang_telinga_kiri',
            'keterangan_kondisi_liang_telinga_kiri',
            'membran_timpani_intak_kanan',
            'membran_timpani_intak_kiri',
            'membran_timpani_perforasi_kanan',
            'keterangan_membran_timpani_perforasi_kanan',
            'membran_timpani_perforasi_kiri',
            'keterangan_membran_timpani_perforasi_kiri',
            'kavum_timpani_mukosa_kanan',
            'kavum_timpani_mukosa_kiri',
            'kavum_timpani_osikel_kanan',
            'kavum_timpani_osikel_kiri',
            'kavum_timpani_isthmus_kanan',
            'kavum_timpani_isthmus_kiri',
            'kavum_timpani_anterior_kanan',
            'kavum_timpani_anterior_kiri',
            'kavum_timpani_posterior_kanan',
            'kavum_timpani_posterior_kiri',
            'lainlain_kanan',
            'lainlain_kiri',
            'kesimpulan',
            'anjuran',
        ],
    ]) ?>

</div>
