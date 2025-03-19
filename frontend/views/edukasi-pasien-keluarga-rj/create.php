<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EdukasiPasienKeluargaRj $model */

$this->title = 'Create Edukasi Pasien Keluarga Rj';
$this->params['breadcrumbs'][] = ['label' => 'Edukasi Pasien Keluarga Rjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edukasi-pasien-keluarga-rj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
