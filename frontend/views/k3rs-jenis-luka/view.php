<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisLuka $model */

$this->title = $model->kode_luka;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Jenis Lukas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="k3rs-jenis-luka-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_luka' => $model->kode_luka], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_luka' => $model->kode_luka], [
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
            'kode_luka',
            'jenis_luka',
        ],
    ]) ?>

</div>
