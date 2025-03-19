<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususDiagnosa $model */

$this->title = 'Create Bridging Rujukan Bpjs Khusus Diagnosa';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khusus Diagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-khusus-diagnosa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
