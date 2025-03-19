<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingMutuAirLimbah $model */

$this->title = 'Update Kesling Mutu Air Limbah: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Kesling Mutu Air Limbahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'nip' => $model->nip, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kesling-mutu-air-limbah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
