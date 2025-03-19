<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Diet $model */

$this->title = 'Update Diet: ' . $model->kd_diet;
$this->params['breadcrumbs'][] = ['label' => 'Diets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_diet, 'url' => ['view', 'kd_diet' => $model->kd_diet]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
