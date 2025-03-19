<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningRawatJalan $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Skrining Rawat Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skrining-rawat-jalan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rkm_medis' => $model->no_rkm_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rkm_medis' => $model->no_rkm_medis], [
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
            'jam',
            'no_rkm_medis',
            'geriatri',
            'kesadaran',
            'pernapasan',
            'nyeri_dada',
            'skala_nyeri',
            'keputusan',
            'nip',
        ],
    ]) ?>

</div>
