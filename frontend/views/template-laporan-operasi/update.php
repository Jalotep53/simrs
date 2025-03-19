<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateLaporanOperasi $model */

$this->title = 'Update Template Laporan Operasi: ' . $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Laporan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_template, 'url' => ['view', 'no_template' => $model->no_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-laporan-operasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
