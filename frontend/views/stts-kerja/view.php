<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SttsKerja $model */

$this->title = $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Stts Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stts-kerja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'stts' => $model->stts], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'stts' => $model->stts], [
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
            'stts',
            'ktg',
            'indek',
        ],
    ]) ?>

</div>
