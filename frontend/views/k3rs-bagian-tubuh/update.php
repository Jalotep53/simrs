<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsBagianTubuh $model */

$this->title = 'Update K3rs Bagian Tubuh: ' . $model->kode_bagian;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Bagian Tubuhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_bagian, 'url' => ['view', 'kode_bagian' => $model->kode_bagian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-bagian-tubuh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
