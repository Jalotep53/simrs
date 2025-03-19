<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLab $model */

$this->title = 'Update Satu Sehat Mapping Lab: ' . $model->id_template;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_template, 'url' => ['view', 'id_template' => $model->id_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
