<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgGynecologi $model */

$this->title = 'Create Hasil Pemeriksaan Usg Gynecologi';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usg Gynecologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-gynecologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
