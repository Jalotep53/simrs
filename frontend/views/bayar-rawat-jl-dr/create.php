<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarRawatJlDr $model */

$this->title = 'Create Bayar Rawat Jl Dr';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Rawat Jl Drs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-rawat-jl-dr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
