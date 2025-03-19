<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JamJaga $model */

$this->title = 'Update Jam Jaga: ' . $model->no_id;
$this->params['breadcrumbs'][] = ['label' => 'Jam Jagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_id, 'url' => ['view', 'no_id' => $model->no_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jam-jaga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
