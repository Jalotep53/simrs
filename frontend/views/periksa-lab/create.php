<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PeriksaLab $model */

$this->title = 'Create Periksa Lab';
$this->params['breadcrumbs'][] = ['label' => 'Periksa Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periksa-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
