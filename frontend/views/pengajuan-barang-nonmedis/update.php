<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBarangNonmedis $model */

$this->title = 'Update Pengajuan Barang Nonmedis: ' . $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Barang Nonmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pengajuan, 'url' => ['view', 'no_pengajuan' => $model->no_pengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajuan-barang-nonmedis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
