<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopiutang $model */

$this->title = 'Update Tokopiutang: ' . $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Tokopiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_piutang, 'url' => ['view', 'nota_piutang' => $model->nota_piutang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokopiutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
