<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jabatan $model */

$this->title = 'Update Jabatan: ' . $model->kd_jbtn;
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jbtn, 'url' => ['view', 'kd_jbtn' => $model->kd_jbtn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
