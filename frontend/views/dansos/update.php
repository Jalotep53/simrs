<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dansos $model */

$this->title = 'Update Dansos: ' . $model->dana;
$this->params['breadcrumbs'][] = ['label' => 'Dansos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dana, 'url' => ['view', 'dana' => $model->dana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dansos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
