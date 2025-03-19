<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganDindingRumahPenerimaDankes $model */

$this->title = 'Update Zis Keterangan Dinding Rumah Penerima Dankes: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Dinding Rumah Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zis-keterangan-dinding-rumah-penerima-dankes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
