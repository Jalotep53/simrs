<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikan $model */

$this->title = 'Update Obat Racikan: ' . $model->tgl_perawatan;
$this->params['breadcrumbs'][] = ['label' => 'Obat Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_perawatan, 'url' => ['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-racikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
