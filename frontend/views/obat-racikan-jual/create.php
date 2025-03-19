<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikanJual $model */

$this->title = 'Create Obat Racikan Jual';
$this->params['breadcrumbs'][] = ['label' => 'Obat Racikan Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-racikan-jual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
