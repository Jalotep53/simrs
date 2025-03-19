<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananDapur $model */

$this->title = 'Update Bayar Pemesanan Dapur: ' . $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Pemesanan Dapurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_bayar, 'url' => ['view', 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-pemesanan-dapur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
