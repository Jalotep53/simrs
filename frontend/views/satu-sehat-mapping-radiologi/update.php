<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingRadiologi $model */

$this->title = 'Update Satu Sehat Mapping Radiologi: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-mapping-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
