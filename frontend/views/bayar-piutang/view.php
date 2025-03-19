<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutang $model */

$this->title = $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bayar-piutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_bayar' => $model->tgl_bayar, 'no_rkm_medis' => $model->no_rkm_medis, 'no_rawat' => $model->no_rawat, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_bayar' => $model->tgl_bayar, 'no_rkm_medis' => $model->no_rkm_medis, 'no_rawat' => $model->no_rawat, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra], [
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
            'tgl_bayar',
            'no_rkm_medis',
            'besar_cicilan',
            'catatan',
            'no_rawat',
            'kd_rek',
            'kd_rek_kontra',
            'diskon_piutang',
            'kd_rek_diskon_piutang',
            'tidak_terbayar',
            'kd_rek_tidak_terbayar',
        ],
    ]) ?>

</div>
