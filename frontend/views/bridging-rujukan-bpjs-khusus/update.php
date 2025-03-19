<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhusus $model */

$this->title = 'Update Bridging Rujukan Bpjs Khusus: ' . $model->no_rujukan;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khususes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rujukan, 'url' => ['view', 'no_rujukan' => $model->no_rujukan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-rujukan-bpjs-khusus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
