<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Setpenjualanperbarang $model */

$this->title = $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Setpenjualanperbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="setpenjualanperbarang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_brng' => $model->kode_brng], [
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
            'kode_brng',
        ],
    ]) ?>

</div>
