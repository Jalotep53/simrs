<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateHasilRadiologi $model */

$this->title = 'Update Template Hasil Radiologi: ' . $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Hasil Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_template, 'url' => ['view', 'no_template' => $model->no_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-hasil-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
