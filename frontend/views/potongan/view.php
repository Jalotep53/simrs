<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Potongan $model */

$this->title = $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Potongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="potongan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tahun' => $model->tahun, 'bulan' => $model->bulan, 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tahun' => $model->tahun, 'bulan' => $model->bulan, 'id' => $model->id], [
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
            'tahun',
            'bulan',
            'id',
            'bpjs',
            'jamsostek',
            'dansos',
            'simwajib',
            'angkop',
            'angla',
            'telpri',
            'pajak',
            'pribadi',
            'lain',
            'ktg',
        ],
    ]) ?>

</div>
