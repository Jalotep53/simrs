<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateUtd $model */

$this->title = $model->id_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Utds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="template-utd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_template' => $model->id_template], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_template' => $model->id_template], [
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
            'id_template',
            'pemeriksaan',
            'nilai_rujukan',
            'bagian_rs',
            'bhp',
            'bagian_perujuk',
            'bagian_dokter',
            'petugas_utd',
            'kso',
            'menejemen',
            'biaya_item',
            'urut',
        ],
    ]) ?>

</div>
