<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePersetujuanPenolakanTindakan $model */

$this->title = 'Update Template Persetujuan Penolakan Tindakan: ' . $model->kode_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Persetujuan Penolakan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_template, 'url' => ['view', 'kode_template' => $model->kode_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-persetujuan-penolakan-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
