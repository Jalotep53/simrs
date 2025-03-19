<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanBerkas $model */

$this->title = 'Create Peminjaman Berkas';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Berkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-berkas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
