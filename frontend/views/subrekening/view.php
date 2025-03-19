<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Subrekening $model */

$this->title = $model->kd_rek2;
$this->params['breadcrumbs'][] = ['label' => 'Subrekenings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subrekening-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_rek2' => $model->kd_rek2], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_rek2' => $model->kd_rek2], [
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
            'kd_rek',
            'kd_rek2',
        ],
    ]) ?>

</div>
