<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiOperator3 $model */

$this->title = 'Create Bayar Operasi Operator3';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Operator3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-operator3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
