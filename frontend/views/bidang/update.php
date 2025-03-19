<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Bidang $model */

$this->title = 'Update Bidang: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Bidangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'nama' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bidang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
