<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerjaPegawai $model */

$this->title = 'Update Pencapaian Kinerja Pegawai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pencapaian Kinerja Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'kode_pencapaian' => $model->kode_pencapaian, 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pencapaian-kinerja-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
