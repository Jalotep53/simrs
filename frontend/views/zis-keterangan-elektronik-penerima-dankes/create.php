<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganElektronikPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Elektronik Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Elektronik Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-elektronik-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
