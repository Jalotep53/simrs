<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\EdukasiPasienKeluargaRj $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Edukasi Pasien Keluarga Rjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="edukasi-pasien-keluarga-rj-view">

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
            'nip',
            'bicara',
            'keterangan_bicara',
            'bahasa_sehari',
            'perlu_penerjemah',
            'keterangan_penerjemah',
            'bahasa_isyarat',
            'cara_belajar',
            'hambatan_belajar',
            'keterangan_hambatan_belajar',
            'kemampuan_belajar',
            'keterangan_kemampuan_belajar',
            'penyakitnya_merupakan',
            'keterangan_penyakitnya_merupakan',
            'keputusan_memilih_layanan',
            'keterangan_keputusan_memilih_layanan',
            'keyakinan_terhadap_terapi',
            'keterangan_keyakinan_terhadap_terapi',
            'aspek_keyakinan_dipertimbangkan',
            'keterangan_aspek_keyakinan_dipertimbangkan',
            'kesediaan_menerima_informasi',
            'topik_edukasi_penyakit',
            'topik_edukasi_rencana_tindakan',
            'topik_edukasi_pengobatan',
            'topik_edukasi_hasil_layanan',
        ],
    ]) ?>

</div>
