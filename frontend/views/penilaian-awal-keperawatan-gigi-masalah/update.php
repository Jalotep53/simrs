<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianAwalKeperawatanGigiMasalah $model */

$this->title = 'Update Penilaian Awal Keperawatan Gigi Masalah: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Awal Keperawatan Gigi Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_masalah' => $model->kode_masalah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-awal-keperawatan-gigi-masalah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
