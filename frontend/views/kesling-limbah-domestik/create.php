<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahDomestik $model */

$this->title = 'Create Kesling Limbah Domestik';
$this->params['breadcrumbs'][] = ['label' => 'Kesling Limbah Domestiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-limbah-domestik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
