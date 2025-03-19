<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanLab $model */

$this->title = 'Create Permintaan Pemeriksaan Lab';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Pemeriksaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-pemeriksaan-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
