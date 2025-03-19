<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\JasaLain $model */

$this->title = $model->thn;
$this->params['breadcrumbs'][] = ['label' => 'Jasa Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jasa-lain-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id, 'bsr_jasa' => $model->bsr_jasa, 'ktg' => $model->ktg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id, 'bsr_jasa' => $model->bsr_jasa, 'ktg' => $model->ktg], [
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
            'thn',
            'bln',
            'id',
            'bsr_jasa',
            'ktg',
        ],
    ]) ?>

</div>
