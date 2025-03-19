<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPemisahanKomponen $model */

$this->title = 'Update Utd Penggunaan Penunjang Pemisahan Komponen: ' . $model->no_donor;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_donor, 'url' => ['view', 'no_donor' => $model->no_donor, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-penggunaan-penunjang-pemisahan-komponen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
