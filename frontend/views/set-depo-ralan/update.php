<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRalan $model */

$this->title = 'Update Set Depo Ralan: ' . $model->kd_poli;
$this->params['breadcrumbs'][] = ['label' => 'Set Depo Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_poli, 'url' => ['view', 'kd_poli' => $model->kd_poli, 'kd_bangsal' => $model->kd_bangsal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-depo-ralan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
