<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailNotaJalan $model */

$this->title = 'Update Detail Nota Jalan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Detail Nota Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'nama_bayar' => $model->nama_bayar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-nota-jalan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
