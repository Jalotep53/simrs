<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarDetailPeriksaLabPerujuk $model */

$this->title = 'Create Bayar Detail Periksa Lab Perujuk';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Detail Periksa Lab Perujuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-detail-periksa-lab-perujuk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
