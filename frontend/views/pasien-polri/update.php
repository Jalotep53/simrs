<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienPolri $model */

$this->title = 'Update Pasien Polri: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-polri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
