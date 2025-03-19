<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrspengeluaran $model */

$this->title = 'Update Ipsrspengeluaran: ' . $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrspengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_keluar, 'url' => ['view', 'no_keluar' => $model->no_keluar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrspengeluaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
