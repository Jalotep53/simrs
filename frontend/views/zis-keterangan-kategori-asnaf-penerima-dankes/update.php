<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganKategoriAsnafPenerimaDankes $model */

$this->title = 'Update Zis Keterangan Kategori Asnaf Penerima Dankes: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Kategori Asnaf Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zis-keterangan-kategori-asnaf-penerima-dankes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
