<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasien $model */

$this->title = 'Update Resume Pasien: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Resume Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resume-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
