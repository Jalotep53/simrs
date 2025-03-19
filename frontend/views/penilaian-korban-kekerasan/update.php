<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianKorbanKekerasan $model */

$this->title = 'Update Penilaian Korban Kekerasan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Korban Kekerasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-korban-kekerasan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
