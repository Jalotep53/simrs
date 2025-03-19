<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayar $model */

$this->title = $model->nama_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Akun Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="akun-bayar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nama_bayar' => $model->nama_bayar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nama_bayar' => $model->nama_bayar], [
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
            'nama_bayar',
            'kd_rek',
            'ppn',
        ],
    ]) ?>

</div>
