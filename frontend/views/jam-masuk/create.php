<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JamMasuk $model */

$this->title = 'Create Jam Masuk';
$this->params['breadcrumbs'][] = ['label' => 'Jam Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jam-masuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
