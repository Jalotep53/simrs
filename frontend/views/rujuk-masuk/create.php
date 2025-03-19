<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RujukMasuk $model */

$this->title = 'Create Rujuk Masuk';
$this->params['breadcrumbs'][] = ['label' => 'Rujuk Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rujuk-masuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
