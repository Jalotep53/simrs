<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jamsostek $model */

$this->title = 'Update Jamsostek: ' . $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Jamsosteks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stts, 'url' => ['view', 'stts' => $model->stts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jamsostek-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
