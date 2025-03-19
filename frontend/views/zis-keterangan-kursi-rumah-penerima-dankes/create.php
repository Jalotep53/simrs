<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganKursiRumahPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Kursi Rumah Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Kursi Rumah Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-kursi-rumah-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
