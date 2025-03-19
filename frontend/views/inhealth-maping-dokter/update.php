<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthMapingDokter $model */

$this->title = 'Update Inhealth Maping Dokter: ' . $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Maping Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dokter, 'url' => ['view', 'kd_dokter' => $model->kd_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inhealth-maping-dokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
