<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPenyerahanDarah $model */

$this->title = $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utd-penggunaan-penunjang-penyerahan-darah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng], [
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
            'no_penyerahan',
            'kode_brng',
            'jml',
            'harga',
            'total',
        ],
    ]) ?>

</div>
