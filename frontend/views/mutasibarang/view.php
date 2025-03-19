<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Mutasibarang $model */

$this->title = $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Mutasibarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mutasibarang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_brng' => $model->kode_brng, 'kd_bangsaldari' => $model->kd_bangsaldari, 'kd_bangsalke' => $model->kd_bangsalke, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_brng' => $model->kode_brng, 'kd_bangsaldari' => $model->kd_bangsaldari, 'kd_bangsalke' => $model->kd_bangsalke, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], [
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
            'kode_brng',
            'jml',
            'harga',
            'kd_bangsaldari',
            'kd_bangsalke',
            'tanggal',
            'keterangan',
            'no_batch',
            'no_faktur',
        ],
    ]) ?>

</div>
