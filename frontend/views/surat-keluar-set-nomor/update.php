<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarSetNomor $model */

$this->title = 'Update Surat Keluar Set Nomor: ' . $model->id_no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Set Nomors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_no_surat, 'url' => ['view', 'id_no_surat' => $model->id_no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-keluar-set-nomor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
