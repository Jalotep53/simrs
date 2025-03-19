<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoJatuhNeonatus $model */

$this->title = 'Update Penilaian Risiko Jatuh Neonatus: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Risiko Jatuh Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-risiko-jatuh-neonatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
