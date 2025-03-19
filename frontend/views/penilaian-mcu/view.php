<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMcu $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Mcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-mcu-view">

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
            'informasi',
            'rps',
            'rpk',
            'rpd',
            'alergi',
            'keadaan',
            'kesadaran',
            'td',
            'nadi',
            'rr',
            'tb',
            'bb',
            'suhu',
            'submandibula',
            'axilla',
            'supraklavikula',
            'leher',
            'inguinal',
            'oedema',
            'sinus_frontalis',
            'sinus_maxilaris',
            'palpebra',
            'sklera',
            'cornea',
            'buta_warna',
            'konjungtiva',
            'lensa',
            'pupil',
            'lubang_telinga',
            'daun_telinga',
            'selaput_pendengaran',
            'proc_mastoideus',
            'septum_nasi',
            'lubang_hidung',
            'bibir',
            'caries',
            'lidah',
            'faring',
            'tonsil',
            'kelenjar_limfe',
            'kelenjar_gondok',
            'gerakan_dada',
            'vocal_femitus',
            'perkusi_dada',
            'bunyi_napas',
            'bunyi_tambahan',
            'ictus_cordis',
            'bunyi_jantung',
            'batas',
            'inspeksi',
            'palpasi',
            'hepar',
            'perkusi_abdomen',
            'auskultasi',
            'limpa',
            'costovertebral',
            'kondisi_kulit',
            'ekstrimitas_atas',
            'ekstrimitas_atas_ket',
            'ekstrimitas_bawah',
            'ekstrimitas_bawah_ket',
            'laborat:ntext',
            'radiologi:ntext',
            'ekg:ntext',
            'spirometri:ntext',
            'audiometri:ntext',
            'treadmill:ntext',
            'lainlain:ntext',
            'merokok',
            'alkohol',
            'kesimpulan:ntext',
            'anjuran:ntext',
        ],
    ]) ?>

</div>
