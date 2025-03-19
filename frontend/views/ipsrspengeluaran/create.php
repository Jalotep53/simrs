<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrspengeluaran $model */

$this->title = 'Create Ipsrspengeluaran';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrspengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrspengeluaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
