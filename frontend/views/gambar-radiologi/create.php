<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GambarRadiologi $model */

$this->title = 'Create Gambar Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Gambar Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gambar-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
