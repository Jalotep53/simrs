<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TokoPengajuanBarang $model */

$this->title = 'Update Toko Pengajuan Barang: ' . $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Toko Pengajuan Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pengajuan, 'url' => ['view', 'no_pengajuan' => $model->no_pengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toko-pengajuan-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
