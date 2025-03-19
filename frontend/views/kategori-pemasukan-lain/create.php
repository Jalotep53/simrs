<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPemasukanLain $model */

$this->title = 'Create Kategori Pemasukan Lain';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pemasukan Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pemasukan-lain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
