<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AmbilDankes $model */

$this->title = 'Update Ambil Dankes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ambil Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ambil-dankes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
