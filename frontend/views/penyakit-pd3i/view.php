<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitPd3i $model */

$this->title = $model->kd_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Penyakit Pd3is', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penyakit-pd3i-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_penyakit' => $model->kd_penyakit], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_penyakit' => $model->kd_penyakit], [
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
            'kd_penyakit',
        ],
    ]) ?>

</div>
