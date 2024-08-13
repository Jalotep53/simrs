<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Setting $model */

$this->title = 'Update Setting: ' . $model->nama_instansi;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_instansi, 'url' => ['view', 'nama_instansi' => $model->nama_instansi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
