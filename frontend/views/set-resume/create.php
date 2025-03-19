<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetResume $model */

$this->title = 'Create Set Resume';
$this->params['breadcrumbs'][] = ['label' => 'Set Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-resume-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
