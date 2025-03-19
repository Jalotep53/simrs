<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturjual $model */

$this->title = $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Tampreturjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tampreturjual-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_jual' => $model->nota_jual, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_jual' => $model->nota_jual, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], [
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
            'kode_brng',
            'nama_brng',
            'jml_jual',
            'h_jual',
            'jml_retur',
            'h_retur',
            'satuan',
            'subtotal',
            'no_batch',
            'petugas',
            'no_faktur',
        ],
    ]) ?>

</div>
