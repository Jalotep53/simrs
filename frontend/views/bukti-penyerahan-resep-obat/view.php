<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenyerahanResepObat $model */

$this->title = $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Penyerahan Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bukti-penyerahan-resep-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_resep' => $model->no_resep], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_resep' => $model->no_resep], [
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
            'no_resep',
            'photo',
        ],
    ]) ?>

</div>
