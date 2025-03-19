<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PengumumanEpasien $model */

$this->title = $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman Epasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengumuman-epasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nik' => $model->nik, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nik' => $model->nik, 'tanggal' => $model->tanggal], [
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
            'nik',
            'tanggal',
            'pengumuman',
        ],
    ]) ?>

</div>
