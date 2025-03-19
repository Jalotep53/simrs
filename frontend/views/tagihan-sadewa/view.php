<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanSadewa $model */

$this->title = $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Sadewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tagihan-sadewa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_nota' => $model->no_nota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_nota' => $model->no_nota], [
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
            'no_nota',
            'no_rkm_medis',
            'nama_pasien',
            'alamat',
            'tgl_bayar',
            'jenis_bayar',
            'jumlah_tagihan',
            'jumlah_bayar',
            'status',
            'petugas',
        ],
    ]) ?>

</div>
