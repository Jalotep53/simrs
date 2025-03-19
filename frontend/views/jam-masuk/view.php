<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\JamMasuk $model */

$this->title = $model->shift;
$this->params['breadcrumbs'][] = ['label' => 'Jam Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jam-masuk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'shift' => $model->shift], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'shift' => $model->shift], [
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
            'shift',
            'jam_masuk',
            'jam_pulang',
        ],
    ]) ?>

</div>
