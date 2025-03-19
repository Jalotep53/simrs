<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRanap $model */

$this->title = 'Update Set Depo Ranap: ' . $model->kd_bangsal;
$this->params['breadcrumbs'][] = ['label' => 'Set Depo Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bangsal, 'url' => ['view', 'kd_bangsal' => $model->kd_bangsal, 'kd_depo' => $model->kd_depo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-depo-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
