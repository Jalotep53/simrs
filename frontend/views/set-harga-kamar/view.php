<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaKamar $model */

$this->title = $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-harga-kamar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_kamar' => $model->kd_kamar, 'kd_pj' => $model->kd_pj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_kamar' => $model->kd_kamar, 'kd_pj' => $model->kd_pj], [
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
            'kd_kamar',
            'kd_pj',
            'tarif',
        ],
    ]) ?>

</div>
