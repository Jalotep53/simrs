<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetServiceRanap $model */

$this->title = 'Update Set Service Ranap: ' . $model->nama_service;
$this->params['breadcrumbs'][] = ['label' => 'Set Service Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_service, 'url' => ['view', 'nama_service' => $model->nama_service]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-service-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
