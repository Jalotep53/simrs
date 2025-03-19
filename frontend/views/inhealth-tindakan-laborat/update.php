<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanLaborat $model */

$this->title = 'Update Inhealth Tindakan Laborat: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Tindakan Laborats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inhealth-tindakan-laborat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
