<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Diet $model */

$this->title = 'Create Diet';
$this->params['breadcrumbs'][] = ['label' => 'Diets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
