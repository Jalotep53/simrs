<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganElektronikPenerimaDankes $model */

$this->title = 'Update Zis Keterangan Elektronik Penerima Dankes: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Elektronik Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zis-keterangan-elektronik-penerima-dankes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
