<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPerawatan $model */

$this->title = 'Update Kategori Perawatan: ' . $model->kd_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kategori, 'url' => ['view', 'kd_kategori' => $model->kd_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-perawatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
