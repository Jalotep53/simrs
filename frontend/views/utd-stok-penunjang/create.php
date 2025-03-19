<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdStokPenunjang $model */

$this->title = 'Create Utd Stok Penunjang';
$this->params['breadcrumbs'][] = ['label' => 'Utd Stok Penunjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-stok-penunjang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
