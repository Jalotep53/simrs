<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage1Internal $model */

$this->title = 'Create Inacbg Grouping Stage1internal';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Grouping Stage1internals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-grouping-stage1-internal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
