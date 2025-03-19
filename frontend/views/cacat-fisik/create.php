<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CacatFisik $model */

$this->title = 'Create Cacat Fisik';
$this->params['breadcrumbs'][] = ['label' => 'Cacat Fisiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cacat-fisik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
