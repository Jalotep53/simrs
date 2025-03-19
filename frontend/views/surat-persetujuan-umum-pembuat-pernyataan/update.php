<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmumPembuatPernyataan $model */

$this->title = 'Update Surat Persetujuan Umum Pembuat Pernyataan: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Persetujuan Umum Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-persetujuan-umum-pembuat-pernyataan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
