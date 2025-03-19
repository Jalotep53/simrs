<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjs $model */

$this->title = 'Create Bridging Rujukan Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
