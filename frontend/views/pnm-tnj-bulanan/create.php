<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PnmTnjBulanan $model */

$this->title = 'Create Pnm Tnj Bulanan';
$this->params['breadcrumbs'][] = ['label' => 'Pnm Tnj Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pnm-tnj-bulanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
