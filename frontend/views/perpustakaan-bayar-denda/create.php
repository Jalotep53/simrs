<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDenda $model */

$this->title = 'Create Perpustakaan Bayar Denda';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Bayar Dendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-bayar-denda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
