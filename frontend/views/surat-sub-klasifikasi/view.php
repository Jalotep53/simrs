<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSubKlasifikasi $model */

$this->title = $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Sub Klasifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-sub-klasifikasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd' => $model->kd], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd' => $model->kd], [
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
            'kd',
            'kd_klasifikasi',
            'sub_klasifikasi',
            'no_bulanan',
            'no_tahunan',
            'bulan',
            'tahun',
        ],
    ]) ?>

</div>
