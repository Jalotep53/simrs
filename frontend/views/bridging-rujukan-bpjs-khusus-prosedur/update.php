<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususProsedur $model */

$this->title = 'Update Bridging Rujukan Bpjs Khusus Prosedur: ' . $model->no_rujukan;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khusus Prosedurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rujukan, 'url' => ['view', 'no_rujukan' => $model->no_rujukan, 'kode_prosedur' => $model->kode_prosedur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-rujukan-bpjs-khusus-prosedur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
