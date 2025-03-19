<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateHasilRadiologi $model */

$this->title = 'Create Template Hasil Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Template Hasil Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-hasil-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
