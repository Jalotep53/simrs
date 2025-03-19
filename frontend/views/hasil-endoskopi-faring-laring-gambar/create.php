<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaringGambar $model */

$this->title = 'Create Hasil Endoskopi Faring Laring Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Faring Laring Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-faring-laring-gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
