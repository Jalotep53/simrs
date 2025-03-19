<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratHamil $model */

$this->title = 'Update Surat Hamil: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Hamils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-hamil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
