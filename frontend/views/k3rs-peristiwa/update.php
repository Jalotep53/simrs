<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPeristiwa $model */

$this->title = 'Update K3rs Peristiwa: ' . $model->no_k3rs;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Peristiwas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_k3rs, 'url' => ['view', 'no_k3rs' => $model->no_k3rs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-peristiwa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
