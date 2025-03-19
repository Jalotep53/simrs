<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienKeracunan $model */

$this->title = 'Create Penilaian Pasien Keracunan';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Keracunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-keracunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
