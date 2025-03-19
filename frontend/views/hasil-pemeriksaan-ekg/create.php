<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanEkg $model */

$this->title = 'Create Hasil Pemeriksaan Ekg';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Ekgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-ekg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
