<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GolonganBarang $model */

$this->title = 'Create Golongan Barang';
$this->params['breadcrumbs'][] = ['label' => 'Golongan Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
