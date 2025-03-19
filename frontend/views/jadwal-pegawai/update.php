<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalPegawai $model */

$this->title = 'Update Jadwal Pegawai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
