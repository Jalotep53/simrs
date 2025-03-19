<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturpiutang $model */

$this->title = $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Tampreturpiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tampreturpiutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_piutang' => $model->nota_piutang, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_piutang' => $model->nota_piutang, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch], [
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
            'nota_piutang',
            'kode_brng',
            'nama_brng',
            'jml_piutang',
            'h_piutang',
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
