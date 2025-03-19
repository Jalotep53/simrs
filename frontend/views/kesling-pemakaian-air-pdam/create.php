<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPemakaianAirPdam $model */

$this->title = 'Create Kesling Pemakaian Air Pdam';
$this->params['breadcrumbs'][] = ['label' => 'Kesling Pemakaian Air Pdams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-pemakaian-air-pdam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
