<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AplicareKetersediaanKamar $model */

$this->title = 'Update Aplicare Ketersediaan Kamar: ' . $model->kode_kelas_aplicare;
$this->params['breadcrumbs'][] = ['label' => 'Aplicare Ketersediaan Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kelas_aplicare, 'url' => ['view', 'kode_kelas_aplicare' => $model->kode_kelas_aplicare, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aplicare-ketersediaan-kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
