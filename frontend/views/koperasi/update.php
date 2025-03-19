<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Koperasi $model */

$this->title = 'Update Koperasi: ' . $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Koperasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stts, 'url' => ['view', 'stts' => $model->stts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="koperasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
