<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DataHAIs $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Data Ha Is', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-hais-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat], [
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
            'tanggal',
            'no_rawat',
            'ETT',
            'CVL',
            'IVL',
            'UC',
            'VAP',
            'IAD',
            'PLEB',
            'ISK',
            'ILO',
            'HAP',
            'Tinea',
            'Scabies',
            'DEKU',
            'SPUTUM',
            'DARAH',
            'URINE',
            'ANTIBIOTIK',
            'kd_kamar',
        ],
    ]) ?>

</div>
