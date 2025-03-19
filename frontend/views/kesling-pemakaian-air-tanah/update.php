<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPemakaianAirTanah $model */

$this->title = 'Update Kesling Pemakaian Air Tanah: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Kesling Pemakaian Air Tanahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'nip' => $model->nip, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kesling-pemakaian-air-tanah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
