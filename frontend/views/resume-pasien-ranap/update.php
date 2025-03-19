<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasienRanap $model */

$this->title = 'Update Resume Pasien Ranap: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Resume Pasien Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resume-pasien-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
