<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerjaPegawai $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pencapaian Kinerja Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pencapaian-kinerja-pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'kode_pencapaian' => $model->kode_pencapaian, 'tahun' => $model->tahun, 'bulan' => $model->bulan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'kode_pencapaian' => $model->kode_pencapaian, 'tahun' => $model->tahun, 'bulan' => $model->bulan], [
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
            'kode_pencapaian',
            'tahun',
            'bulan',
            'keterangan',
        ],
    ]) ?>

</div>
