<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLab $model */

$this->title = $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permintaan-lab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'noorder' => $model->noorder], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'noorder' => $model->noorder], [
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
            'noorder',
            'no_rawat',
            'tgl_permintaan',
            'jam_permintaan',
            'tgl_sampel',
            'jam_sampel',
            'tgl_hasil',
            'jam_hasil',
            'dokter_perujuk',
            'status',
            'informasi_tambahan',
            'diagnosa_klinis',
        ],
    ]) ?>

</div>
