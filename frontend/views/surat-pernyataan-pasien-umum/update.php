<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmum $model */

$this->title = 'Update Surat Pernyataan Pasien Umum: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pernyataan Pasien Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-pernyataan-pasien-umum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
