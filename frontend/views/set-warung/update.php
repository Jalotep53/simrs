<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetWarung $model */

$this->title = 'Update Set Warung: ' . $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Set Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tahun, 'url' => ['view', 'tahun' => $model->tahun, 'bulan' => $model->bulan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-warung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
