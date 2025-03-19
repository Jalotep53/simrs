<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePersetujuanPenolakanTindakan $model */

$this->title = $model->kode_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Persetujuan Penolakan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="template-persetujuan-penolakan-tindakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_template' => $model->kode_template], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_template' => $model->kode_template], [
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
            'kode_template',
            'diagnosa',
            'tindakan',
            'indikasi_tindakan',
            'tata_cara',
            'tujuan',
            'risiko',
            'komplikasi',
            'prognosis',
            'alternatif_dan_risikonya',
            'lain_lain',
            'biaya',
        ],
    ]) ?>

</div>
