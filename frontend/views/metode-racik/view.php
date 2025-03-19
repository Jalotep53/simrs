<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MetodeRacik $model */

$this->title = $model->kd_racik;
$this->params['breadcrumbs'][] = ['label' => 'Metode Raciks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="metode-racik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_racik' => $model->kd_racik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_racik' => $model->kd_racik], [
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
            'kd_racik',
            'nm_racik',
        ],
    ]) ?>

</div>
