<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Deposit $model */

$this->title = $model->no_deposit;
$this->params['breadcrumbs'][] = ['label' => 'Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deposit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_deposit' => $model->no_deposit], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_deposit' => $model->no_deposit], [
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
            'no_deposit',
            'no_rawat',
            'tgl_deposit',
            'nama_bayar',
            'besarppn',
            'besar_deposit',
            'nip',
            'keterangan',
        ],
    ]) ?>

</div>
