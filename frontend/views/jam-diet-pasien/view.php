<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\JamDietPasien $model */

$this->title = $model->waktu;
$this->params['breadcrumbs'][] = ['label' => 'Jam Diet Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jam-diet-pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'waktu' => $model->waktu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'waktu' => $model->waktu], [
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
            'waktu',
            'jam',
        ],
    ]) ?>

</div>
