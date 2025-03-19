<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganUkuranRumahPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Ukuran Rumah Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Ukuran Rumah Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-ukuran-rumah-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
