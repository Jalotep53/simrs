<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObat $model */

$this->title = $model->no_rekonsiliasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekonsiliasi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rekonsiliasi-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rekonsiliasi' => $model->no_rekonsiliasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rekonsiliasi' => $model->no_rekonsiliasi], [
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
            'no_rekonsiliasi',
            'no_rawat',
            'tanggal_wawancara',
            'rekonsiliasi_obat_saat',
            'alergi_obat',
            'manifestasi_alergi',
            'dampak_alergi',
            'nip',
        ],
    ]) ?>

</div>
