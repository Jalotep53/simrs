<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateUtd $model */

$this->title = 'Update Template Utd: ' . $model->id_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Utds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_template, 'url' => ['view', 'id_template' => $model->id_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-utd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
