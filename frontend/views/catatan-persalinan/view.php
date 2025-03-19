<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanPersalinan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Catatan Persalinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="catatan-persalinan-view">

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
            'mulai',
            'selesai',
            'kd_dokter',
            'nip',
            'catatan:ntext',
            'waktu_persalinan_kala_1',
            'waktu_persalinan_kala_2',
            'waktu_persalinan_kala_3',
            'waktu_persalinan_jumlah',
            'perineum',
            'jahitan_luar_1',
            'jahitan_luar_2',
            'jahitan_dalam_1',
            'jahitan_dalam_2',
            'anak',
            'status_lahir',
            'apgar_score',
            'bb',
            'pb',
            'kelainan',
            'ketuban',
            'placenta',
            'ukuran',
            'tali_pusat',
            'insertio',
            'darah_keluar_kala_1',
            'darah_keluar_kala_2',
            'darah_keluar_kala_3',
            'darah_keluar_kala_4',
            'darah_keluar_jumlah',
            'kondisi_umum',
            'td',
            'nadi',
            'rr',
            'suhu',
            'kontraksi_uterus',
            'ppv',
            'pengobatan',
        ],
    ]) ?>

</div>
