<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlDr $model */

$this->title = 'Create Rawat Jl Dr';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Jl Drs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-jl-dr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
