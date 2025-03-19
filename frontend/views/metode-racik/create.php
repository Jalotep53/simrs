<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MetodeRacik $model */

$this->title = 'Create Metode Racik';
$this->params['breadcrumbs'][] = ['label' => 'Metode Raciks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metode-racik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
