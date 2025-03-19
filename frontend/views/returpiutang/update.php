<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Returpiutang $model */

$this->title = 'Update Returpiutang: ' . $model->no_retur_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Returpiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_retur_piutang, 'url' => ['view', 'no_retur_piutang' => $model->no_retur_piutang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="returpiutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
