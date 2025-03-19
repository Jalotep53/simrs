<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TokoBayarPiutang $model */

$this->title = $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Toko Bayar Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="toko-bayar-piutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_bayar' => $model->tgl_bayar, 'no_member' => $model->no_member, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_bayar' => $model->tgl_bayar, 'no_member' => $model->no_member, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra], [
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
            'no_member',
            'besar_cicilan',
            'catatan',
            'nota_piutang',
            'kd_rek',
            'kd_rek_kontra',
        ],
    ]) ?>

</div>
