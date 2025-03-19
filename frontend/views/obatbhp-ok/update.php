<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatbhpOk $model */

$this->title = 'Update Obatbhp Ok: ' . $model->kd_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obatbhp Oks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_obat, 'url' => ['view', 'kd_obat' => $model->kd_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obatbhp-ok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
