<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryResume $model */

$this->title = 'Update Temporary Resume: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Temporary Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temporary-resume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
