<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailHibah $model */

$this->title = $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Detail Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ipsrs-detail-hibah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng], [
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
        ],
    ]) ?>

</div>
