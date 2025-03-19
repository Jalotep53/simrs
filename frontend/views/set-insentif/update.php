<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetInsentif $model */

$this->title = 'Update Set Insentif: ' . $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Set Insentifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tahun, 'url' => ['view', 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-insentif-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
