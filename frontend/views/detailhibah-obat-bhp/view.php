<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailhibahObatBhp $model */

$this->title = $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Detailhibah Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detailhibah-obat-bhp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch], [
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
            'no_hibah',
            'kode_brng',
            'kode_sat',
            'jumlah',
            'h_hibah',
            'subtotalhibah',
            'h_diakui',
            'subtotaldiakui',
            'no_batch',
            'jumlah2',
            'kadaluarsa',
        ],
    ]) ?>

</div>
