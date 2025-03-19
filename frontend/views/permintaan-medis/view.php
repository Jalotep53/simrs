<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanMedis $model */

$this->title = $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permintaan-medis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_permintaan' => $model->no_permintaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_permintaan' => $model->no_permintaan], [
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
            'no_permintaan',
            'kd_bangsal',
            'nip',
            'tanggal',
            'status',
            'kd_bangsaltujuan',
        ],
    ]) ?>

</div>
