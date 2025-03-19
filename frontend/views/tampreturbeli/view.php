<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturbeli $model */

$this->title = $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Tampreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tampreturbeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_faktur' => $model->no_faktur, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_faktur' => $model->no_faktur, 'kode_brng' => $model->kode_brng], [
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
            'no_faktur',
            'kode_brng',
            'nama_brng',
            'satuan',
            'h_beli',
            'jml_beli',
            'h_retur',
            'jml_retur',
            'total',
            'no_batch',
            'jml_retur2',
            'kadaluarsa',
            'petugas',
        ],
    ]) ?>

</div>
