<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvsuhu $model */

$this->title = 'Update Satu Sehat Observationttvsuhu: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvsuhus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat, 'status' => $model->status]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-observationttvsuhu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
