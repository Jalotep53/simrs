<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisBuktiPemesanan $model */

$this->title = 'Update Inventaris Bukti Pemesanan: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Bukti Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-bukti-pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
