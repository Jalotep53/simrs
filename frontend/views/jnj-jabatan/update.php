<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnjJabatan $model */

$this->title = 'Update Jnj Jabatan: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Jnj Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jnj-jabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
