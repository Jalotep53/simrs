<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Penjualan $model */

$this->title = 'Update Penjualan: ' . $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_jual, 'url' => ['view', 'nota_jual' => $model->nota_jual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
