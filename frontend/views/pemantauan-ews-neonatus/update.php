<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanEwsNeonatus $model */

$this->title = 'Update Pemantauan Ews Neonatus: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Ews Neonatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemantauan-ews-neonatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
