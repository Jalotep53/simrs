<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TokoSuratPemesanan $model */

$this->title = 'Update Toko Surat Pemesanan: ' . $model->no_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Toko Surat Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pemesanan, 'url' => ['view', 'no_pemesanan' => $model->no_pemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toko-surat-pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
