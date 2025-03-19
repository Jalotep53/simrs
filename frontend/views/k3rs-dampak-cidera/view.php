<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsDampakCidera $model */

$this->title = $model->kode_dampak;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Dampak Cideras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="k3rs-dampak-cidera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_dampak' => $model->kode_dampak], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_dampak' => $model->kode_dampak], [
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
            'kode_dampak',
            'dampak_cidera',
        ],
    ]) ?>

</div>
