<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianAwalKeperawatanIgdMasalah $model */

$this->title = 'Create Penilaian Awal Keperawatan Igd Masalah';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Awal Keperawatan Igd Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-awal-keperawatan-igd-masalah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
