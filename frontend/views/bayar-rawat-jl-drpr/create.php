<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarRawatJlDrpr $model */

$this->title = 'Create Bayar Rawat Jl Drpr';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Rawat Jl Drprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-rawat-jl-drpr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
