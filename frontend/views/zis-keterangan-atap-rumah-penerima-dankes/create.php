<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganAtapRumahPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Atap Rumah Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Atap Rumah Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-atap-rumah-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
