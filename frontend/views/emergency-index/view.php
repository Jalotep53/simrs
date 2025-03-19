<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\EmergencyIndex $model */

$this->title = $model->kode_emergency;
$this->params['breadcrumbs'][] = ['label' => 'Emergency Indices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="emergency-index-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_emergency' => $model->kode_emergency], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_emergency' => $model->kode_emergency], [
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
            'kode_emergency',
            'nama_emergency',
            'indek',
        ],
    ]) ?>

</div>
