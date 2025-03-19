<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasien $model */

$this->title = 'Create Resume Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Resume Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
