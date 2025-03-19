<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningRawatJalan $model */

$this->title = 'Update Skrining Rawat Jalan: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Skrining Rawat Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skrining-rawat-jalan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
