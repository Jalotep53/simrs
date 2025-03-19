<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalTambahan $model */

$this->title = 'Update Jadwal Tambahan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Tambahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-tambahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
