<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPenyebab $model */

$this->title = 'Update K3rs Penyebab: ' . $model->kode_penyebab;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Penyebabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_penyebab, 'url' => ['view', 'kode_penyebab' => $model->kode_penyebab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-penyebab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
