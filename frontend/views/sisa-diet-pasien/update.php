<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SisaDietPasien $model */

$this->title = 'Update Sisa Diet Pasien: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Sisa Diet Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sisa-diet-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
