<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalTambahan $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Tambahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jadwal-tambahan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan], [
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
            'id',
            'tahun',
            'bulan',
            'h1',
            'h2',
            'h3',
            'h4',
            'h5',
            'h6',
            'h7',
            'h8',
            'h9',
            'h10',
            'h11',
            'h12',
            'h13',
            'h14',
            'h15',
            'h16',
            'h17',
            'h18',
            'h19',
            'h20',
            'h21',
            'h22',
            'h23',
            'h24',
            'h25',
            'h26',
            'h27',
            'h28',
            'h29',
            'h30',
            'h31',
        ],
    ]) ?>

</div>
