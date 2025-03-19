<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianUlangNyeri $model */

$this->title = 'Update Penilaian Ulang Nyeri: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Ulang Nyeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-ulang-nyeri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
