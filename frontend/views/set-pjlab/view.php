<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetPjlab $model */

$this->title = $model->kd_dokterlab;
$this->params['breadcrumbs'][] = ['label' => 'Set Pjlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-pjlab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_dokterlab' => $model->kd_dokterlab, 'kd_dokterrad' => $model->kd_dokterrad, 'kd_dokterhemodialisa' => $model->kd_dokterhemodialisa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_dokterlab' => $model->kd_dokterlab, 'kd_dokterrad' => $model->kd_dokterrad, 'kd_dokterhemodialisa' => $model->kd_dokterhemodialisa], [
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
            'kd_dokterlab',
            'kd_dokterrad',
            'kd_dokterhemodialisa',
            'kd_dokterutd',
            'kd_dokterlabpa',
            'kd_dokterlabmb',
        ],
    ]) ?>

</div>
