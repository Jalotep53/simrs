<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikan $model */

$this->title = 'Create Obat Racikan';
$this->params['breadcrumbs'][] = ['label' => 'Obat Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-racikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
