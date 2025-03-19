<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasien $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Resume Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resume-pasien-view">

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
            'kd_dokter',
            'keluhan_utama:ntext',
            'jalannya_penyakit:ntext',
            'pemeriksaan_penunjang:ntext',
            'hasil_laborat:ntext',
            'diagnosa_utama',
            'kd_diagnosa_utama',
            'diagnosa_sekunder',
            'kd_diagnosa_sekunder',
            'diagnosa_sekunder2',
            'kd_diagnosa_sekunder2',
            'diagnosa_sekunder3',
            'kd_diagnosa_sekunder3',
            'diagnosa_sekunder4',
            'kd_diagnosa_sekunder4',
            'prosedur_utama',
            'kd_prosedur_utama',
            'prosedur_sekunder',
            'kd_prosedur_sekunder',
            'prosedur_sekunder2',
            'kd_prosedur_sekunder2',
            'prosedur_sekunder3',
            'kd_prosedur_sekunder3',
            'kondisi_pulang',
            'obat_pulang:ntext',
        ],
    ]) ?>

</div>
