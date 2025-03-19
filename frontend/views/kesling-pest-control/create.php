<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPestControl $model */

$this->title = 'Create Kesling Pest Control';
$this->params['breadcrumbs'][] = ['label' => 'Kesling Pest Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-pest-control-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
