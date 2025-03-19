<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePesertaKegiatanKelompok $model */

$this->title = 'Update Pcare Peserta Kegiatan Kelompok: ' . $model->eduId;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Peserta Kegiatan Kelompoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eduId, 'url' => ['view', 'eduId' => $model->eduId, 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-peserta-kegiatan-kelompok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
