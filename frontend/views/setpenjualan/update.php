<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Setpenjualan $model */

$this->title = 'Update Setpenjualan: ' . $model->kdjns;
$this->params['breadcrumbs'][] = ['label' => 'Setpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kdjns, 'url' => ['view', 'kdjns' => $model->kdjns]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="setpenjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
