<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunAsetInventaris $model */

$this->title = 'Update Akun Aset Inventaris: ' . $model->id_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Akun Aset Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis, 'url' => ['view', 'id_jenis' => $model->id_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-aset-inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
