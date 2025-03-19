<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahB3medis $model */

$this->title = 'Create Kesling Limbah B3medis';
$this->params['breadcrumbs'][] = ['label' => 'Kesling Limbah B3medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-limbah-b3medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
