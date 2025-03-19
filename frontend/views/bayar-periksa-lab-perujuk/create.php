<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPeriksaLabPerujuk $model */

$this->title = 'Create Bayar Periksa Lab Perujuk';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Periksa Lab Perujuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-periksa-lab-perujuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
