<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapursuplier $model */

$this->title = 'Update Dapursuplier: ' . $model->kode_suplier;
$this->params['breadcrumbs'][] = ['label' => 'Dapursupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_suplier, 'url' => ['view', 'kode_suplier' => $model->kode_suplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dapursuplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
