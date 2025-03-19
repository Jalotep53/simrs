<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganPengeluaranPenerimaDankes $model */

$this->title = 'Create Zis Keterangan Pengeluaran Penerima Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Zis Keterangan Pengeluaran Penerima Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-pengeluaran-penerima-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
