<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganDapurRumahPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Dapur Rumah Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Dapur Rumah Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-dapur-rumah-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
