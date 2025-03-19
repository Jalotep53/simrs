<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkorBromagePascaAnestesi $model */

$this->title = 'Update Skor Bromage Pasca Anestesi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Skor Bromage Pasca Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skor-bromage-pasca-anestesi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
