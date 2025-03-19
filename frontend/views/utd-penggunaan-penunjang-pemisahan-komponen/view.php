<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPemisahanKomponen $model */

$this->title = $model->no_donor;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utd-penggunaan-penunjang-pemisahan-komponen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_donor' => $model->no_donor, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_donor' => $model->no_donor, 'kode_brng' => $model->kode_brng], [
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
            'no_donor',
            'kode_brng',
            'jml',
            'harga',
            'total',
        ],
    ]) ?>

</div>
