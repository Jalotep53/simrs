<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhusus $model */

$this->title = 'Create Bridging Rujukan Bpjs Khusus';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs Khususes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-khusus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
