<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Rekeningtahun $model */

$this->title = $model->thn;
$this->params['breadcrumbs'][] = ['label' => 'Rekeningtahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rekeningtahun-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'thn' => $model->thn, 'kd_rek' => $model->kd_rek], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'thn' => $model->thn, 'kd_rek' => $model->kd_rek], [
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
            'thn',
            'kd_rek',
            'saldo_awal',
        ],
    ]) ?>

</div>
