<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryPayment $model */

$this->title = 'Create Temporary Payment';
$this->params['breadcrumbs'][] = ['label' => 'Temporary Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
