<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilRadiologi $model */

$this->title = 'Update Hasil Radiologi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
