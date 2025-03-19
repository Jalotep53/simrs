<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Spesialis $model */

$this->title = $model->kd_sps;
$this->params['breadcrumbs'][] = ['label' => 'Spesialis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="spesialis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_sps' => $model->kd_sps], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_sps' => $model->kd_sps], [
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
            'kd_sps',
            'nm_sps',
        ],
    ]) ?>

</div>
