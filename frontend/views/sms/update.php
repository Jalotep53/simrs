<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Sms $model */

$this->title = 'Update Sms: ' . $model->id_pesan;
$this->params['breadcrumbs'][] = ['label' => 'Sms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pesan, 'url' => ['view', 'id_pesan' => $model->id_pesan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
