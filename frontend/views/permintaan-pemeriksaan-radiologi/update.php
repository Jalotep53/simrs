<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanRadiologi $model */

$this->title = 'Update Permintaan Pemeriksaan Radiologi: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Pemeriksaan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-pemeriksaan-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
