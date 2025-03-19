<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanInternalPoli $model */

$this->title = 'Update Rujukan Internal Poli: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rujukan Internal Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_dokter' => $model->kd_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rujukan-internal-poli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
