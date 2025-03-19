<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususProsedur $model */

$this->title = 'Create Bridging Rujukan Bpjs Khusus Prosedur';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khusus Prosedurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-khusus-prosedur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
