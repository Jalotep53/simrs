<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SiranapKetersediaanKamar $model */

$this->title = $model->kode_ruang_siranap;
$this->params['breadcrumbs'][] = ['label' => 'Siranap Ketersediaan Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="siranap-ketersediaan-kamar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_ruang_siranap' => $model->kode_ruang_siranap, 'kelas_ruang_siranap' => $model->kelas_ruang_siranap, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_ruang_siranap' => $model->kode_ruang_siranap, 'kelas_ruang_siranap' => $model->kelas_ruang_siranap, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas], [
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
            'kode_ruang_siranap',
            'kelas_ruang_siranap',
            'kd_bangsal',
            'kelas',
            'kapasitas',
            'tersedia',
            'tersediapria',
            'tersediawanita',
            'menunggu',
        ],
    ]) ?>

</div>
