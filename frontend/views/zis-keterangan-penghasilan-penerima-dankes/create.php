<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganPenghasilanPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Penghasilan Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Penghasilan Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-penghasilan-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
