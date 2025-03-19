<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlPr $model */

$this->title = 'Create Rawat Jl Pr';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Jl Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-jl-pr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
