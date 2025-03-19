<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage1 $model */

$this->title = 'Create Inacbg Grouping Stage1';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Grouping Stage1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-grouping-stage1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
