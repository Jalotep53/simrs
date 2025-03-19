<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenagihanPiutang $model */

$this->title = 'Update Bukti Penagihan Piutang: ' . $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tagihan, 'url' => ['view', 'no_tagihan' => $model->no_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-penagihan-piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
