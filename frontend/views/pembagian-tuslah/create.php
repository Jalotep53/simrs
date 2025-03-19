<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PembagianTuslah $model */

$this->title = 'Create Pembagian Tuslah';
$this->params['breadcrumbs'][] = ['label' => 'Pembagian Tuslahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembagian-tuslah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
