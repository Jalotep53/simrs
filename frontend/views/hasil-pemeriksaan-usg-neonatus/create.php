<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgNeonatus $model */

$this->title = 'Create Hasil Pemeriksaan Usg Neonatus';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-neonatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
