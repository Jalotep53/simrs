<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKegiatanKelompok $model */

$this->title = $model->eduId;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Kegiatan Kelompoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pcare-kegiatan-kelompok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'eduId' => $model->eduId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'eduId' => $model->eduId], [
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
            'eduId',
            'clubId',
            'namaClub',
            'tglPelayanan',
            'nmKegiatan',
            'nmKelompok',
            'materi',
            'pembicara',
            'lokasi',
            'keterangan',
            'biaya',
        ],
    ]) ?>

</div>
