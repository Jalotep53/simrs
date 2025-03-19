<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganKamarMandiPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Kamar Mandi Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Kamar Mandi Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-kamar-mandi-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
