<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPersalinanPasien $model */

$this->title = 'Create Riwayat Persalinan Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Persalinan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-persalinan-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
