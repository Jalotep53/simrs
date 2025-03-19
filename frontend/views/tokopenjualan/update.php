<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopenjualan $model */

$this->title = 'Update Tokopenjualan: ' . $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Tokopenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_jual, 'url' => ['view', 'nota_jual' => $model->nota_jual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokopenjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
