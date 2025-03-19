<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokosuplier $model */

$this->title = 'Update Tokosuplier: ' . $model->kode_suplier;
$this->params['breadcrumbs'][] = ['label' => 'Tokosupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_suplier, 'url' => ['view', 'kode_suplier' => $model->kode_suplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokosuplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
