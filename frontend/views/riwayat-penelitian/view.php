<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenelitian $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Penelitians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-penelitian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'judul_penelitian' => $model->judul_penelitian, 'tahun' => $model->tahun], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'judul_penelitian' => $model->judul_penelitian, 'tahun' => $model->tahun], [
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
            'jenis_penelitian',
            'peranan',
            'judul_penelitian',
            'judul_jurnal',
            'tahun',
            'biaya_penelitian',
            'asal_dana',
            'berkas',
        ],
    ]) ?>

</div>
