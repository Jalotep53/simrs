<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikanJual $model */

$this->title = 'Update Obat Racikan Jual: ' . $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Obat Racikan Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_jual, 'url' => ['view', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-racikan-jual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
