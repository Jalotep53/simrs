<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanJenisBuku $model */

$this->title = 'Create Perpustakaan Jenis Buku';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Jenis Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-jenis-buku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
