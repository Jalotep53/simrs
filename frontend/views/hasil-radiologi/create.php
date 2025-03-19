<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilRadiologi $model */

$this->title = 'Create Hasil Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
