<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\KonverSat $model */

$this->title = $model->nilai;
$this->params['breadcrumbs'][] = ['label' => 'Konver Sats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="konver-sat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nilai' => $model->nilai, 'kode_sat' => $model->kode_sat, 'nilai_konversi' => $model->nilai_konversi, 'sat_konversi' => $model->sat_konversi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nilai' => $model->nilai, 'kode_sat' => $model->kode_sat, 'nilai_konversi' => $model->nilai_konversi, 'sat_konversi' => $model->sat_konversi], [
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
            'nilai',
            'kode_sat',
            'nilai_konversi',
            'sat_konversi',
        ],
    ]) ?>

</div>
