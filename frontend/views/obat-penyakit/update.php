<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatPenyakit $model */

$this->title = 'Update Obat Penyakit: ' . $model->kd_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Obat Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_penyakit, 'url' => ['view', 'kd_penyakit' => $model->kd_penyakit, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-penyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
