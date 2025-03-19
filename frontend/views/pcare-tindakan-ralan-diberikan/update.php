<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareTindakanRalanDiberikan $model */

$this->title = 'Update Pcare Tindakan Ralan Diberikan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Tindakan Ralan Diberikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-tindakan-ralan-diberikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
