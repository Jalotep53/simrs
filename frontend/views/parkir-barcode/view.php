<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirBarcode $model */

$this->title = $model->kode_barcode;
$this->params['breadcrumbs'][] = ['label' => 'Parkir Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="parkir-barcode-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_barcode' => $model->kode_barcode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_barcode' => $model->kode_barcode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_barcode',
            'nomer_kartu',
        ],
    ]) ?>

</div>
