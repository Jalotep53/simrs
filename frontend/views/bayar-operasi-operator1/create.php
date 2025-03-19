<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiOperator1 $model */

$this->title = 'Create Bayar Operasi Operator1';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Operator1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-operator1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
