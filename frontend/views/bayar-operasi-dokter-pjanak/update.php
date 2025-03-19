<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterPjanak $model */

$this->title = 'Update Bayar Operasi Dokter Pjanak: ' . $model->no_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Dokter Pjanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_bayar, 'url' => ['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tgl_operasi' => $model->tgl_operasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-operasi-dokter-pjanak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
