<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisDetailHibah $model */

$this->title = 'Update Inventaris Detail Hibah: ' . $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Detail Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_hibah, 'url' => ['view', 'no_hibah' => $model->no_hibah, 'kode_barang' => $model->kode_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-detail-hibah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
