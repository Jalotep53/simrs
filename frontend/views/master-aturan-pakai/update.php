<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterAturanPakai $model */

$this->title = 'Update Master Aturan Pakai: ' . $model->aturan;
$this->params['breadcrumbs'][] = ['label' => 'Master Aturan Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aturan, 'url' => ['view', 'aturan' => $model->aturan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-aturan-pakai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
