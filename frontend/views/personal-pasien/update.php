<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PersonalPasien $model */

$this->title = 'Update Personal Pasien: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Personal Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personal-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
