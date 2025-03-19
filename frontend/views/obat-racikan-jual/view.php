<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikanJual $model */

$this->title = $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Obat Racikan Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obat-racikan-jual-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik], [
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
            'nama_racik',
            'kd_racik',
            'jml_dr',
            'aturan_pakai',
            'keterangan',
        ],
    ]) ?>

</div>
