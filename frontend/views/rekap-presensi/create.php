<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RekapPresensi $model */

$this->title = 'Create Rekap Presensi';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Presensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-presensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
