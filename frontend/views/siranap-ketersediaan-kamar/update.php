<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SiranapKetersediaanKamar $model */

$this->title = 'Update Siranap Ketersediaan Kamar: ' . $model->kode_ruang_siranap;
$this->params['breadcrumbs'][] = ['label' => 'Siranap Ketersediaan Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_ruang_siranap, 'url' => ['view', 'kode_ruang_siranap' => $model->kode_ruang_siranap, 'kelas_ruang_siranap' => $model->kelas_ruang_siranap, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siranap-ketersediaan-kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
