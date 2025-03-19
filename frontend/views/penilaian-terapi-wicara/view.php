<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTerapiWicara $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Terapi Wicaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-terapi-wicara-view">

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
            'diagnosa_terapi_wicara',
            'diagnosa_medis',
            'anamnesa',
            'suhu',
            'rr',
            'nadi',
            'td',
            'perilaku_adaptif_kontak_mata',
            'perilaku_adaptif_atensi',
            'perilaku_adaptif_perilaku',
            'kemampuan_bahasa_bicara_spontan',
            'kemampuan_bahasa_pemahaman_bahasa',
            'kemampuan_bahasa_pengujaran',
            'kemampuan_bahasa_membaca',
            'kemampuan_bahasa_penamaan',
            'organ_wicara_anatomis_lip',
            'organ_wicara_anatomis_tongue',
            'organ_wicara_anatomis_hard_palate',
            'organ_wicara_anatomis_soft_palate',
            'organ_wicara_anatomis_uvula',
            'organ_wicara_anatomis_mandibula',
            'organ_wicara_anatomis_maxila',
            'organ_wicara_anatomis_dental',
            'organ_wicara_anatomis_faring',
            'organ_wicara_fisiologis_lip',
            'organ_wicara_fisiologis_tongue',
            'organ_wicara_fisiologis_hard_palate',
            'organ_wicara_fisiologis_soft_palate',
            'organ_wicara_fisiologis_uvula',
            'organ_wicara_fisiologis_mandibula',
            'organ_wicara_fisiologis_maxilla',
            'organ_wicara_fisiologis_dental',
            'organ_wicara_fisiologis_faring',
            'aktifitas_oral_menghisap',
            'aktifitas_oral_mengunyah',
            'aktifitas_oral_meniup',
            'kemampuan_artikulasi_subtitusi',
            'kemampuan_artikulasi_omisi',
            'kemampuan_artikulasi_distorsi',
            'kemampuan_artikulasi_adisi',
            'resonasi',
            'kemampuan_suara_nada',
            'kemampuan_suara_kualitas',
            'kemampuan_suara_kenyaringan',
            'kemampuan_irama_kelancaran',
            'kemampuan_menelan',
            'pernafasan',
            'tingkat_komunikasi_dekoding_pendengaran',
            'tingkat_komunikasi_dekoding_penglihatan',
            'tingkat_komunikasi_dekoding_kinesik',
            'tingkat_komunikasi_enkoding_bicara',
            'tingkat_komunikasi_enkoding_tulisan',
            'tingkat_komunikasi_enkoding_mimik',
            'tingkat_komunikasi_enkoding_gesture',
            'penunjang_medis',
            'perencanaan_terapi_tujuan',
            'perencanaan_terapi_program',
            'edukasi',
            'tindak_lanjut',
            'nip',
        ],
    ]) ?>

</div>
