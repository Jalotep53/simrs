<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatApotekBpjs $model */

$this->title = 'Create Maping Obat Apotek Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Maping Obat Apotek Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-obat-apotek-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
