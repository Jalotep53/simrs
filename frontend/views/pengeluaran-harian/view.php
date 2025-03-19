<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranHarian $model */

$this->title = $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengeluaran-harian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_keluar' => $model->no_keluar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_keluar' => $model->no_keluar], [
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
            'no_keluar',
            'tanggal',
            'kode_kategori',
            'biaya',
            'nip',
            'keterangan',
        ],
    ]) ?>

</div>
