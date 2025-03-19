<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingTindakanRanapPcare $model */

$this->title = 'Update Maping Tindakan Ranap Pcare: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Maping Tindakan Ranap Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maping-tindakan-ranap-pcare-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
