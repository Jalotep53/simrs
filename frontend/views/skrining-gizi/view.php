<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningGizi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Skrining Gizis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skrining-gizi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'no_rawat',
            'tanggal',
            'skrining_bb',
            'skrining_tb',
            'alergi',
            'parameter_imt',
            'skor_imt',
            'parameter_bb',
            'skor_bb',
            'parameter_penyakit',
            'skor_penyakit',
            'skor_total',
            'parameter_total',
            'nip',
        ],
    ]) ?>

</div>
