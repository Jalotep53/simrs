<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPerawatan $model */

$this->title = 'Create Kategori Perawatan';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-perawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
