<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Ketidakhadiran $model */

$this->title = $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Ketidakhadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ketidakhadiran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl' => $model->tgl, 'id' => $model->id, 'jns' => $model->jns], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl' => $model->tgl, 'id' => $model->id, 'jns' => $model->jns], [
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
            'tgl',
            'id',
            'jns',
            'ktg',
            'jml',
        ],
    ]) ?>

</div>
