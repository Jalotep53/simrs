<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPeriksaRadiologi $model */

$this->title = 'Create Bayar Periksa Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Periksa Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-periksa-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
