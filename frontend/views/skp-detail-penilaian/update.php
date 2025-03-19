<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpDetailPenilaian $model */

$this->title = 'Update Skp Detail Penilaian: ' . $model->nomor_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Skp Detail Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_penilaian, 'url' => ['view', 'nomor_penilaian' => $model->nomor_penilaian, 'kode_kriteria' => $model->kode_kriteria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skp-detail-penilaian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
