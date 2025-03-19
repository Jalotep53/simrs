<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ResikoKerja $model */

$this->title = $model->kode_resiko;
$this->params['breadcrumbs'][] = ['label' => 'Resiko Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resiko-kerja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_resiko' => $model->kode_resiko], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_resiko' => $model->kode_resiko], [
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
            'kode_resiko',
            'nama_resiko',
            'indek',
        ],
    ]) ?>

</div>
