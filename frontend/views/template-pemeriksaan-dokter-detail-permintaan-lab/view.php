<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterDetailPermintaanLab $model */

$this->title = $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Detail Permintaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="template-pemeriksaan-dokter-detail-permintaan-lab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template], [
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
            'no_template',
            'kd_jenis_prw',
            'id_template',
        ],
    ]) ?>

</div>
