<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AplicareKetersediaanKamar $model */

$this->title = $model->kode_kelas_aplicare;
$this->params['breadcrumbs'][] = ['label' => 'Aplicare Ketersediaan Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aplicare-ketersediaan-kamar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_kelas_aplicare' => $model->kode_kelas_aplicare, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_kelas_aplicare' => $model->kode_kelas_aplicare, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas], [
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
            'kode_kelas_aplicare',
            'kd_bangsal',
            'kelas',
            'kapasitas',
            'tersedia',
            'tersediapria',
            'tersediawanita',
            'tersediapriawanita',
        ],
    ]) ?>

</div>
