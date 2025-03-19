<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKunjunganUmum $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Kunjungan Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pcare-kunjungan-umum-view">

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
            'noKunjungan',
            'tglDaftar',
            'no_rkm_medis',
            'nm_pasien',
            'noKartu',
            'kdPoli',
            'nmPoli',
            'keluhan',
            'kdSadar',
            'nmSadar',
            'sistole',
            'diastole',
            'beratBadan',
            'tinggiBadan',
            'respRate',
            'heartRate',
            'lingkarPerut',
            'terapi',
            'kdStatusPulang',
            'nmStatusPulang',
            'tglPulang',
            'kdDokter',
            'nmDokter',
            'kdDiag1',
            'nmDiag1',
            'kdDiag2',
            'nmDiag2',
            'kdDiag3',
            'nmDiag3',
            'status',
            'KdAlergiMakanan',
            'NmAlergiMakanan',
            'KdAlergiUdara',
            'NmAlergiUdara',
            'KdAlergiObat',
            'NmAlergiObat',
            'KdPrognosa',
            'NmPrognosa',
            'terapi_non_obat',
            'bmhp',
        ],
    ]) ?>

</div>
