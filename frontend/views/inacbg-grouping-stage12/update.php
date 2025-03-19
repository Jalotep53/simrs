<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage12 $model */

$this->title = 'Update Inacbg Grouping Stage12: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Grouping Stage12s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-grouping-stage12-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
