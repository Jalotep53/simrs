<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratBebasTato $model */

$this->title = 'Update Surat Bebas Tato: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Bebas Tatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-bebas-tato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
