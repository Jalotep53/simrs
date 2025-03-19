<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InsidenKeselamatan $model */

$this->title = $model->kode_insiden;
$this->params['breadcrumbs'][] = ['label' => 'Insiden Keselamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="insiden-keselamatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_insiden' => $model->kode_insiden], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_insiden' => $model->kode_insiden], [
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
            'kode_insiden',
            'nama_insiden',
            'jenis_insiden',
            'dampak',
        ],
    ]) ?>

</div>
