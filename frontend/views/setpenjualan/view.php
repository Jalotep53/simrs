<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Setpenjualan $model */

$this->title = $model->kdjns;
$this->params['breadcrumbs'][] = ['label' => 'Setpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="setpenjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kdjns' => $model->kdjns], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kdjns' => $model->kdjns], [
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
            'ralan',
            'kelas1',
            'kelas2',
            'kelas3',
            'utama',
            'vip',
            'vvip',
            'beliluar',
            'jualbebas',
            'karyawan',
            'kdjns',
        ],
    ]) ?>

</div>
