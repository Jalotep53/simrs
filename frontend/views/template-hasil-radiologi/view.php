<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateHasilRadiologi $model */

$this->title = $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Hasil Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="template-hasil-radiologi-view">

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
            'nama_pemeriksaan',
            'template_hasil_radiologi:ntext',
        ],
    ]) ?>

</div>
