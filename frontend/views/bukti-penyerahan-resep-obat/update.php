<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenyerahanResepObat $model */

$this->title = 'Update Bukti Penyerahan Resep Obat: ' . $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Penyerahan Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_resep, 'url' => ['view', 'no_resep' => $model->no_resep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-penyerahan-resep-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
