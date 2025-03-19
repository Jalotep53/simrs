<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedis $model */

$this->title = 'Update Surat Penolakan Anjuran Medis: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Penolakan Anjuran Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-penolakan-anjuran-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
