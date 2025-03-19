<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHariLibur $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Set Hari Liburs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-hari-libur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal], [
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
            'tanggal',
            'ktg',
        ],
    ]) ?>

</div>
