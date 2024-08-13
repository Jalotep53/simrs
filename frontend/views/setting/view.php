<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Setting $model */

$this->title = $model->nama_instansi;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="setting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nama_instansi' => $model->nama_instansi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nama_instansi' => $model->nama_instansi], [
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
            'nama_instansi',
            'alamat_instansi',
            'kabupaten',
            'propinsi',
            'kontak',
            'email:email',
            'aktifkan',
            'kode_ppk',
            'kode_ppkinhealth',
            'kode_ppkkemenkes',
            'wallpaper',
            'logo',
        ],
    ]) ?>

</div>
