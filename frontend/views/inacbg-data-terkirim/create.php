<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirim $model */

$this->title = 'Create Inacbg Data Terkirim';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Data Terkirims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-data-terkirim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
