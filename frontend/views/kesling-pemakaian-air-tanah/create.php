<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPemakaianAirTanah $model */

$this->title = 'Create Kesling Pemakaian Air Tanah';
$this->params['breadcrumbs'][] = ['label' => 'Kesling Pemakaian Air Tanahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-pemakaian-air-tanah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
