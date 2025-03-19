<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratRuang $model */

$this->title = 'Update Surat Ruang: ' . $model->kd;
$this->params['breadcrumbs'][] = ['label' => 'Surat Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd, 'url' => ['view', 'kd' => $model->kd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
