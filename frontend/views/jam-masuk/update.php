<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JamMasuk $model */

$this->title = 'Update Jam Masuk: ' . $model->shift;
$this->params['breadcrumbs'][] = ['label' => 'Jam Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shift, 'url' => ['view', 'shift' => $model->shift]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jam-masuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
