<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPenyakit $model */

$this->title = 'Update Kategori Penyakit: ' . $model->kd_ktg;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_ktg, 'url' => ['view', 'kd_ktg' => $model->kd_ktg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-penyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
