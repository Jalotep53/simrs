<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangLainlain $model */

$this->title = 'Update Bayar Piutang Lainlain: ' . $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Piutang Lainlains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_bayar, 'url' => ['view', 'tgl_bayar' => $model->tgl_bayar, 'kode_peminjam' => $model->kode_peminjam, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'nama_bayar' => $model->nama_bayar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-piutang-lainlain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
