<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarDetailPeriksaLab $model */

$this->title = 'Create Bayar Detail Periksa Lab';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Detail Periksa Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-detail-periksa-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
