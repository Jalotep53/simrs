<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage12 $model */

$this->title = 'Create Inacbg Grouping Stage12';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Grouping Stage12s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-grouping-stage12-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
