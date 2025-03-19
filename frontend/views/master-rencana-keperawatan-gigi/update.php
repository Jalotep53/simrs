<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanGigi $model */

$this->title = 'Update Master Rencana Keperawatan Gigi: ' . $model->kode_rencana;
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Gigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_rencana, 'url' => ['view', 'kode_rencana' => $model->kode_rencana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-rencana-keperawatan-gigi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
