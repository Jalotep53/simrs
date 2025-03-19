<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanEbook $model */

$this->title = 'Update Perpustakaan Ebook: ' . $model->kode_ebook;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Ebooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_ebook, 'url' => ['view', 'kode_ebook' => $model->kode_ebook]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-ebook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
