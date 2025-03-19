<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Setsms $model */

$this->title = 'Update Setsms: ' . $model->kode_sms;
$this->params['breadcrumbs'][] = ['label' => 'Setsms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_sms, 'url' => ['view', 'kode_sms' => $model->kode_sms]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="setsms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
