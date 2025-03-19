<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPenerbit $model */

$this->title = 'Create Perpustakaan Penerbit';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Penerbits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-penerbit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
