<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatanInap $model */

$this->title = $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Matrik Akun Jns Perawatan Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="matrik-akun-jns-perawatan-inap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_jenis_prw' => $model->kd_jenis_prw], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_jenis_prw' => $model->kd_jenis_prw], [
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
            'kd_jenis_prw',
            'pendapatan_tindakan',
            'beban_jasa_dokter',
            'utang_jasa_dokter',
            'beban_jasa_paramedis',
            'utang_jasa_paramedis',
            'beban_kso',
            'utang_kso',
            'hpp_persediaan',
            'persediaan_bhp',
            'beban_jasa_sarana',
            'utang_jasa_sarana',
            'beban_menejemen',
            'utang_menejemen',
        ],
    ]) ?>

</div>
