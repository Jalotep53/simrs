<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianAwalKeperawatanGigiMasalah $model */

$this->title = 'Create Penilaian Awal Keperawatan Gigi Masalah';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Awal Keperawatan Gigi Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-awal-keperawatan-gigi-masalah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
