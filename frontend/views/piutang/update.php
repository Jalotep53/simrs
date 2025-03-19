<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Piutang $model */

$this->title = 'Update Piutang: ' . $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_piutang, 'url' => ['view', 'nota_piutang' => $model->nota_piutang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
