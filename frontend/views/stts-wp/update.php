<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SttsWp $model */

$this->title = 'Update Stts Wp: ' . $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Stts Wps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stts, 'url' => ['view', 'stts' => $model->stts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stts-wp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
