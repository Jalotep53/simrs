<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePesertaKegiatanKelompok $model */

$this->title = $model->eduId;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Peserta Kegiatan Kelompoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pcare-peserta-kegiatan-kelompok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'eduId' => $model->eduId, 'no_rkm_medis' => $model->no_rkm_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'eduId' => $model->eduId, 'no_rkm_medis' => $model->no_rkm_medis], [
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
            'eduId',
            'no_rkm_medis',
        ],
    ]) ?>

</div>
