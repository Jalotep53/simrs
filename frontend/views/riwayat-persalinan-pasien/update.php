<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPersalinanPasien $model */

$this->title = 'Update Riwayat Persalinan Pasien: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Persalinan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_thn' => $model->tgl_thn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-persalinan-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
