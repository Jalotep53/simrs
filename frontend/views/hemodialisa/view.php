<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Hemodialisa $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hemodialisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hemodialisa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'no_rawat',
            'tanggal',
            'kd_dokter',
            'lama',
            'akses',
            'dialist',
            'transfusi',
            'penarikan',
            'qb',
            'qd',
            'ureum',
            'hb',
            'hbsag',
            'creatinin',
            'hiv',
            'hcv',
            'lain',
            'kd_penyakit',
        ],
    ]) ?>

</div>
