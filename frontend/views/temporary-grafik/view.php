<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryGrafik $model */

$this->title = $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Temporary Grafiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="temporary-grafik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no' => $model->no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no' => $model->no], [
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
            'no',
            'temp1',
            'temp2',
            'temp3',
            'temp4',
            'temp5',
            'temp6',
            'temp7',
            'temp8',
            'temp9',
            'temp10',
            'temp11',
            'temp12',
            'temp13',
            'temp14',
            'temp15',
            'temp16',
            'temp17',
            'temp18',
            'temp19',
            'temp20',
            'temp21',
            'temp22',
            'temp23',
            'temp24',
            'temp25',
            'temp26',
            'temp27',
            'temp28',
            'temp29',
            'temp30',
            'temp31',
            'temp32',
            'temp33',
            'temp34',
            'temp35',
            'temp36',
            'temp37',
        ],
    ]) ?>

</div>
