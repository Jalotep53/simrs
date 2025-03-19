<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanBerkas $model */

$this->title = $model->peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Berkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peminjaman-berkas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'peminjam' => $model->peminjam, 'id_ruang' => $model->id_ruang, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'peminjam' => $model->peminjam, 'id_ruang' => $model->id_ruang, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip], [
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
            'peminjam',
            'id_ruang',
            'no_rkm_medis',
            'tgl_pinjam',
            'tgl_kembali',
            'nip',
            'status_pinjam',
        ],
    ]) ?>

</div>
