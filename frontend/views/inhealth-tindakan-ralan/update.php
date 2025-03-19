<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanRalan $model */

$this->title = 'Update Inhealth Tindakan Ralan: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inhealth-tindakan-ralan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
