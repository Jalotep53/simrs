<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisSuplier $model */

$this->title = 'Update Inventaris Suplier: ' . $model->kode_suplier;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Supliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_suplier, 'url' => ['view', 'kode_suplier' => $model->kode_suplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-suplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
