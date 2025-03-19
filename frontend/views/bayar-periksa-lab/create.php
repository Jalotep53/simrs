<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPeriksaLab $model */

$this->title = 'Create Bayar Periksa Lab';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Periksa Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-periksa-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
