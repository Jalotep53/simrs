<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangLainlain $model */

$this->title = 'Create Bayar Piutang Lainlain';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Piutang Lainlains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-piutang-lainlain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
