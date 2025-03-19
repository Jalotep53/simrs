<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratBebasTbc $model */

$this->title = 'Update Surat Bebas Tbc: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Bebas Tbcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-bebas-tbc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
