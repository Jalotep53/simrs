<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisDetailBeli $model */

$this->title = 'Update Inventaris Detail Beli: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Detail Belis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur, 'kode_barang' => $model->kode_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-detail-beli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
