<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutang $model */

$this->title = 'Update Bayar Piutang: ' . $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_bayar, 'url' => ['view', 'tgl_bayar' => $model->tgl_bayar, 'no_rkm_medis' => $model->no_rkm_medis, 'no_rawat' => $model->no_rawat, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
