<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPeriksaRadiologiPerujuk $model */

$this->title = 'Create Bayar Periksa Radiologi Perujuk';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Periksa Radiologi Perujuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-periksa-radiologi-perujuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
