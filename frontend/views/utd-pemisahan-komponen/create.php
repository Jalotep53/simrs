<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPemisahanKomponen $model */

$this->title = 'Create Utd Pemisahan Komponen';
$this->params['breadcrumbs'][] = ['label' => 'Utd Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-pemisahan-komponen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
