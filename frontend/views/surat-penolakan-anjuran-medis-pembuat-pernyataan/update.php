<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedisPembuatPernyataan $model */

$this->title = 'Update Surat Penolakan Anjuran Medis Pembuat Pernyataan: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Penolakan Anjuran Medis Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-penolakan-anjuran-medis-pembuat-pernyataan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
