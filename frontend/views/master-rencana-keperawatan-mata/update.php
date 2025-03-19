<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanMata $model */

$this->title = 'Update Master Rencana Keperawatan Mata: ' . $model->kode_rencana;
$this->params['breadcrumbs'][] = ['label' => 'Master Rencana Keperawatan Matas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_rencana, 'url' => ['view', 'kode_rencana' => $model->kode_rencana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-rencana-keperawatan-mata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
