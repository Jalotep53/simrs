<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiOperator1 $model */

$this->title = 'Update Bayar Operasi Operator1: ' . $model->no_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Operator1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_bayar, 'url' => ['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tgl_operasi' => $model->tgl_operasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-operasi-operator1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
