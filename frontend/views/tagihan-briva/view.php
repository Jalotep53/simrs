<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBriva $model */

$this->title = $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Brivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tagihan-briva-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_tagihan' => $model->no_tagihan, 'status_tagihan' => $model->status_tagihan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_tagihan' => $model->no_tagihan, 'status_tagihan' => $model->status_tagihan], [
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
            'no_rkm_medis',
            'nm_pasien',
            'alamat',
            'jk',
            'tgl_lahir',
            'tgl_registrasi',
            'no_tagihan',
            'besar_bayar',
            'keterangan',
            'status_tagihan',
            'tgl_closing',
            'status_bayar',
            'kasir',
            'diupdatebank',
            'referensi',
        ],
    ]) ?>

</div>
