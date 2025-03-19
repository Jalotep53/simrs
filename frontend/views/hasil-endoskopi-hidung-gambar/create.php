<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiHidungGambar $model */

$this->title = 'Create Hasil Endoskopi Hidung Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Hidung Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-hidung-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
