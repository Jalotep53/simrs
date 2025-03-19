<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanLabpa $model */

$this->title = 'Create Permintaan Pemeriksaan Labpa';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Pemeriksaan Labpas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-pemeriksaan-labpa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
