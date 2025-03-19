<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliklinikPcare $model */

$this->title = 'Update Maping Poliklinik Pcare: ' . $model->kd_poli_rs;
$this->params['breadcrumbs'][] = ['label' => 'Maping Poliklinik Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_poli_rs, 'url' => ['view', 'kd_poli_rs' => $model->kd_poli_rs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maping-poliklinik-pcare-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
