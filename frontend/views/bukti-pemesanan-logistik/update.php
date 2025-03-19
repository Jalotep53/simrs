<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPemesananLogistik $model */

$this->title = 'Update Bukti Pemesanan Logistik: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Pemesanan Logistiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-pemesanan-logistik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
