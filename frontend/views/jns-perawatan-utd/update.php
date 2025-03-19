<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanUtd $model */

$this->title = 'Update Jns Perawatan Utd: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatan Utds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jns-perawatan-utd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
