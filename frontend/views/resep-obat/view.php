<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepObat $model */

$this->title = $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resep-obat-view">

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
            'tgl_perawatan',
            'jam',
            'no_rawat',
            'kd_dokter',
            'tgl_peresepan',
            'jam_peresepan',
            'status',
            'tgl_penyerahan',
            'jam_penyerahan',
        ],
    ]) ?>

</div>
