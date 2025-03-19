<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienPenyakitMenular $model */

$this->title = 'Create Penilaian Pasien Penyakit Menular';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Penyakit Menulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-penyakit-menular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
