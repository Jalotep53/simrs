<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPenagihanPiutang $model */

$this->title = 'Update Detail Penagihan Piutang: ' . $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Detail Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tagihan, 'url' => ['view', 'no_tagihan' => $model->no_tagihan, 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-penagihan-piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
