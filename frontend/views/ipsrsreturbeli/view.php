<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrsreturbeli $model */

$this->title = $model->no_retur_beli;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrsreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ipsrsreturbeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_retur_beli' => $model->no_retur_beli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_retur_beli' => $model->no_retur_beli], [
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
            'no_retur_beli',
            'tgl_retur',
            'nip',
            'kode_suplier',
            'catatan',
            'total',
        ],
    ]) ?>

</div>
