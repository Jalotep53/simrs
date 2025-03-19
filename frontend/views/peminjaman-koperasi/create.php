<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanKoperasi $model */

$this->title = 'Create Peminjaman Koperasi';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Koperasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-koperasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
