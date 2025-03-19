<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanLabmb $model */

$this->title = 'Create Permintaan Pemeriksaan Labmb';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Pemeriksaan Labmbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-pemeriksaan-labmb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
