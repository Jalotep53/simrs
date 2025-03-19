<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKategoriPenilaian $model */

$this->title = 'Create Skp Kategori Penilaian';
$this->params['breadcrumbs'][] = ['label' => 'Skp Kategori Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-kategori-penilaian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
