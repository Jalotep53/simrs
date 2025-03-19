<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetResume $model */

$this->title = 'Update Set Resume: ' . $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Set Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tahun, 'url' => ['view', 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-resume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
