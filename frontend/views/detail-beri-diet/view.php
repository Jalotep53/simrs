<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailBeriDiet $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Detail Beri Diets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-beri-diet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu, 'kd_diet' => $model->kd_diet], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu, 'kd_diet' => $model->kd_diet], [
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
            'kd_kamar',
            'tanggal',
            'waktu',
            'kd_diet',
        ],
    ]) ?>

</div>
