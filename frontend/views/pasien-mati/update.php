<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienMati $model */

$this->title = 'Update Pasien Mati: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Matis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-mati-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
