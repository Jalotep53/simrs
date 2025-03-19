<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmumPembuatPernyataan $model */

$this->title = 'Create Surat Pernyataan Pasien Umum Pembuat Pernyataan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pernyataan Pasien Umum Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pernyataan-pasien-umum-pembuat-pernyataan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
