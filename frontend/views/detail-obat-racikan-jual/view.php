<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikanJual $model */

$this->title = $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Detail Obat Racikan Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-obat-racikan-jual-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng], [
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
            'nota_jual',
            'no_racik',
            'kode_brng',
        ],
    ]) ?>

</div>
