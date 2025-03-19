<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienTni $model */

$this->title = 'Update Pasien Tni: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-tni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
