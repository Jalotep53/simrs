<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Peminjampiutang $model */

$this->title = $model->kode_peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjampiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peminjampiutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_peminjam' => $model->kode_peminjam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_peminjam' => $model->kode_peminjam], [
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
            'kode_peminjam',
            'nama_peminjam',
            'alamat',
            'no_telp',
            'kd_rek',
            'status',
        ],
    ]) ?>

</div>
