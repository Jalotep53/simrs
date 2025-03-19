<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienMati $model */

$this->title = $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Matis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-mati-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rkm_medis' => $model->no_rkm_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rkm_medis' => $model->no_rkm_medis], [
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
            'keterangan',
            'temp_meninggal',
            'icd1',
            'icd2',
            'icd3',
            'icd4',
            'kd_dokter',
        ],
    ]) ?>

</div>
