<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleVap $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Vaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-bundle-vap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], [
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
            'tanggal',
            'id_ruang',
            'posisi_kepala',
            'pengkajian_setiap_hari',
            'hand_hygiene',
            'oral_hygiene',
            'suction_manajemen_sekresi',
            'profilaksis_peptic_ulcer',
            'dvt_profiklasisi',
            'penggunaan_apd_sesuai',
        ],
    ]) ?>

</div>
