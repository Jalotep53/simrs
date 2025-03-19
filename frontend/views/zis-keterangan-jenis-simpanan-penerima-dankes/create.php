<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganJenisSimpananPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Jenis Simpanan Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Jenis Simpanan Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-jenis-simpanan-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
