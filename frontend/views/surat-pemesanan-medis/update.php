<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananMedis $model */

$this->title = 'Update Surat Pemesanan Medis: ' . $model->no_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pemesanan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pemesanan, 'url' => ['view', 'no_pemesanan' => $model->no_pemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-pemesanan-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
