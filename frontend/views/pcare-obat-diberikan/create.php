<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareObatDiberikan $model */

$this->title = 'Create Pcare Obat Diberikan';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Obat Diberikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-obat-diberikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
