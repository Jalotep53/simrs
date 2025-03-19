<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tokosuplier $model */

$this->title = $model->kode_suplier;
$this->params['breadcrumbs'][] = ['label' => 'Tokosupliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tokosuplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_suplier' => $model->kode_suplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_suplier' => $model->kode_suplier], [
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
            'kode_suplier',
            'nama_suplier',
            'alamat',
            'kota',
            'no_telp',
            'nama_bank',
            'rekening',
        ],
    ]) ?>

</div>
