<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRanap $model */

$this->title = $model->kd_bangsal;
$this->params['breadcrumbs'][] = ['label' => 'Set Depo Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-depo-ranap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_bangsal' => $model->kd_bangsal, 'kd_depo' => $model->kd_depo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_bangsal' => $model->kd_bangsal, 'kd_depo' => $model->kd_depo], [
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
            'kd_bangsal',
            'kd_depo',
        ],
    ]) ?>

</div>
