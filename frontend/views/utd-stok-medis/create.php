<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdStokMedis $model */

$this->title = 'Create Utd Stok Medis';
$this->params['breadcrumbs'][] = ['label' => 'Utd Stok Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-stok-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
