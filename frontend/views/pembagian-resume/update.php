<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PembagianResume $model */

$this->title = 'Update Pembagian Resume: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembagian Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembagian-resume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
