<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienImunitasRendah $model */

$this->title = 'Update Penilaian Pasien Imunitas Rendah: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Imunitas Rendahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-pasien-imunitas-rendah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
