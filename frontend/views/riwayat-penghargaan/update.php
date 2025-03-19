<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenghargaan $model */

$this->title = 'Update Riwayat Penghargaan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Penghargaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'nama_penghargaan' => $model->nama_penghargaan, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-penghargaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
