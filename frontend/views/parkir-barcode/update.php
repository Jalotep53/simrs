<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirBarcode $model */

$this->title = 'Update Parkir Barcode: ' . $model->kode_barcode;
$this->params['breadcrumbs'][] = ['label' => 'Parkir Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_barcode, 'url' => ['view', 'kode_barcode' => $model->kode_barcode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parkir-barcode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
