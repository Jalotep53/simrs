<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPenyakit $model */

$this->title = 'Create Kategori Penyakit';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-penyakit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
