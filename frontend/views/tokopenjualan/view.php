<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopenjualan $model */

$this->title = $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Tokopenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tokopenjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_jual' => $model->nota_jual], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_jual' => $model->nota_jual], [
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
            'nota_jual',
            'tgl_jual',
            'nip',
            'no_member',
            'nm_member',
            'keterangan',
            'jns_jual',
            'ongkir',
            'ppn',
            'kd_rek',
            'total',
            'nama_bayar',
        ],
    ]) ?>

</div>
