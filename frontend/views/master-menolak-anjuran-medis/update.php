<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMenolakAnjuranMedis $model */

$this->title = 'Update Master Menolak Anjuran Medis: ' . $model->kode_penolakan;
$this->params['breadcrumbs'][] = ['label' => 'Master Menolak Anjuran Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_penolakan, 'url' => ['view', 'kode_penolakan' => $model->kode_penolakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-menolak-anjuran-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
