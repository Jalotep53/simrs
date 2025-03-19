<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerusahaanPasien $model */

$this->title = 'Update Perusahaan Pasien: ' . $model->kode_perusahaan;
$this->params['breadcrumbs'][] = ['label' => 'Perusahaan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_perusahaan, 'url' => ['view', 'kode_perusahaan' => $model->kode_perusahaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perusahaan-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
