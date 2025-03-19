<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TokoBayarPiutang $model */

$this->title = 'Update Toko Bayar Piutang: ' . $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Toko Bayar Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_bayar, 'url' => ['view', 'tgl_bayar' => $model->tgl_bayar, 'no_member' => $model->no_member, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toko-bayar-piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
