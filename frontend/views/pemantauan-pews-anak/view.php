<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsAnak $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Pews Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemantauan-pews-anak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'no_rawat',
            'tanggal',
            'parameter_perilaku',
            'skor_perilaku',
            'parameter_crt_atau_warna_kulit',
            'skor_crt_atau_warna_kulit',
            'parameter_perespirasi',
            'skor_perespirasi',
            'skor_total',
            'parameter_total',
            'nip',
        ],
    ]) ?>

</div>
