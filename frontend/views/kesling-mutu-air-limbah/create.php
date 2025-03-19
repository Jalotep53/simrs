<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingMutuAirLimbah $model */

$this->title = 'Create Kesling Mutu Air Limbah';
$this->params['breadcrumbs'][] = ['label' => 'Kesling Mutu Air Limbahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-mutu-air-limbah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
