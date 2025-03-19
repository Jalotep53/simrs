<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahDomestik $model */

$this->title = $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Kesling Limbah Domestiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kesling-limbah-domestik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nip' => $model->nip, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nip' => $model->nip, 'tanggal' => $model->tanggal], [
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
            'nip',
            'tanggal',
            'jumlahlimbah',
            'tanggalangkut',
            'keterangan',
        ],
    ]) ?>

</div>
