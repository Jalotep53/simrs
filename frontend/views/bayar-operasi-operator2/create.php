<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiOperator2 $model */

$this->title = 'Create Bayar Operasi Operator2';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Operator2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-operator2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
