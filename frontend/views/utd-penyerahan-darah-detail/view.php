<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahDetail $model */

$this->title = $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penyerahan Darah Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utd-penyerahan-darah-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_penyerahan' => $model->no_penyerahan, 'no_kantong' => $model->no_kantong], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_penyerahan' => $model->no_penyerahan, 'no_kantong' => $model->no_kantong], [
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
            'no_penyerahan',
            'no_kantong',
            'jasa_sarana',
            'paket_bhp',
            'kso',
            'manajemen',
            'total',
        ],
    ]) ?>

</div>
