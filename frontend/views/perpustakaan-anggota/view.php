<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanAnggota $model */

$this->title = $model->no_anggota;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perpustakaan-anggota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_anggota' => $model->no_anggota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_anggota' => $model->no_anggota], [
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
            'no_anggota',
            'nama_anggota',
            'tmp_lahir',
            'tgl_lahir',
            'j_kel',
            'alamat',
            'no_telp',
            'email:email',
            'tgl_gabung',
            'masa_berlaku',
            'jenis_anggota',
            'nomer_id',
        ],
    ]) ?>

</div>
