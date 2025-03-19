<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgUrologi $model */

$this->title = 'Create Hasil Pemeriksaan Usg Urologi';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Urologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-urologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
