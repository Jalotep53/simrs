<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EmergencyIndex $model */

$this->title = 'Update Emergency Index: ' . $model->kode_emergency;
$this->params['breadcrumbs'][] = ['label' => 'Emergency Indices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_emergency, 'url' => ['view', 'kode_emergency' => $model->kode_emergency]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emergency-index-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
