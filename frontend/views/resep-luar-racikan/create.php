<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarRacikan $model */

$this->title = 'Create Resep Luar Racikan';
$this->params['breadcrumbs'][] = ['label' => 'Resep Luar Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-racikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
