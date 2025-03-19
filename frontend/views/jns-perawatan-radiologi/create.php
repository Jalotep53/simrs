<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanRadiologi $model */

$this->title = 'Create Jns Perawatan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
