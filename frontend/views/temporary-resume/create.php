<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryResume $model */

$this->title = 'Create Temporary Resume';
$this->params['breadcrumbs'][] = ['label' => 'Temporary Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-resume-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
