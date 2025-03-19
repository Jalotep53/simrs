<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelingaGambar $model */

$this->title = 'Create Hasil Endoskopi Telinga Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Telinga Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-telinga-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
