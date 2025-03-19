<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Rekeningtahun $model */

$this->title = 'Update Rekeningtahun: ' . $model->thn;
$this->params['breadcrumbs'][] = ['label' => 'Rekeningtahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->thn, 'url' => ['view', 'thn' => $model->thn, 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekeningtahun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
