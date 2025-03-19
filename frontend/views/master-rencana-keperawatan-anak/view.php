<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanAnak $model */

$this->title = $model->kode_rencana;
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-rencana-keperawatan-anak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_rencana' => $model->kode_rencana], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_rencana' => $model->kode_rencana], [
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
            'kode_masalah',
            'kode_rencana',
            'rencana_keperawatan',
        ],
    ]) ?>

</div>
