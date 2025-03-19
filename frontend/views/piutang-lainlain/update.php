<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangLainlain $model */

$this->title = 'Update Piutang Lainlain: ' . $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Piutang Lainlains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_piutang, 'url' => ['view', 'nota_piutang' => $model->nota_piutang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="piutang-lainlain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
