<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganKategoriPhbsPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Kategori Phbs Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Kategori Phbs Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-kategori-phbs-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
