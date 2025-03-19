<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterPcare $model */

$this->title = 'Update Maping Dokter Pcare: ' . $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Maping Dokter Pcares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dokter, 'url' => ['view', 'kd_dokter' => $model->kd_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maping-dokter-pcare-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
