<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Dansos $model */

$this->title = $model->dana;
$this->params['breadcrumbs'][] = ['label' => 'Dansos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dansos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'dana' => $model->dana], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'dana' => $model->dana], [
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
            'dana',
        ],
    ]) ?>

</div>
