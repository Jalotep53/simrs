<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisPeminjaman $model */

$this->title = $model->peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inventaris-peminjaman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'peminjam' => $model->peminjam, 'no_inventaris' => $model->no_inventaris, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'peminjam' => $model->peminjam, 'no_inventaris' => $model->no_inventaris, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip], [
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
            'tlp',
            'no_inventaris',
            'tgl_pinjam',
            'tgl_kembali',
            'nip',
            'status_pinjam',
        ],
    ]) ?>

</div>
