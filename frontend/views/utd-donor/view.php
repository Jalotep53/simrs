<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDonor $model */

$this->title = $model->no_donor;
$this->params['breadcrumbs'][] = ['label' => 'Utd Donors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utd-donor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_donor' => $model->no_donor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_donor' => $model->no_donor], [
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
            'no_donor',
            'no_pendonor',
            'tanggal',
            'dinas',
            'tensi',
            'no_bag',
            'jenis_bag',
            'jenis_donor',
            'tempat_aftap',
            'petugas_aftap',
            'hbsag',
            'hcv',
            'hiv',
            'spilis',
            'malaria',
            'petugas_u_saring',
            'status',
        ],
    ]) ?>

</div>
