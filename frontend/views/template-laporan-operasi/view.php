<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateLaporanOperasi $model */

$this->title = $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Laporan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="template-laporan-operasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_template' => $model->no_template], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_template' => $model->no_template], [
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
            'nama_operasi',
            'diagnosa_preop',
            'diagnosa_postop',
            'jaringan_dieksisi',
            'permintaan_pa',
            'laporan_operasi:ntext',
        ],
    ]) ?>

</div>
