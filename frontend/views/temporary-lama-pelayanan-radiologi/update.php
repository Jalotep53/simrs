<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryLamaPelayananRadiologi $model */

$this->title = 'Update Temporary Lama Pelayanan Radiologi: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Temporary Lama Pelayanan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temporary-lama-pelayanan-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
