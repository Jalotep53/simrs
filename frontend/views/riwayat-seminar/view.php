<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatSeminar $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Seminars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-seminar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'nama_seminar' => $model->nama_seminar, 'mulai' => $model->mulai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'nama_seminar' => $model->nama_seminar, 'mulai' => $model->mulai], [
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
            'id',
            'tingkat',
            'jenis',
            'nama_seminar',
            'peranan',
            'mulai',
            'selesai',
            'penyelengara',
            'tempat',
            'berkas',
        ],
    ]) ?>

</div>
