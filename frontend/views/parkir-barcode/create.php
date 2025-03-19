<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirBarcode $model */

$this->title = 'Create Parkir Barcode';
$this->params['breadcrumbs'][] = ['label' => 'Parkir Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parkir-barcode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
