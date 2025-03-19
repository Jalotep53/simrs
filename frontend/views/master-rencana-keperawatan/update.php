<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatan $model */

$this->title = 'Update Master Rencana Keperawatan: ' . $model->kode_rencana;
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_rencana, 'url' => ['view', 'kode_rencana' => $model->kode_rencana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-rencana-keperawatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
