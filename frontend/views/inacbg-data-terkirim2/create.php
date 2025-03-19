<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirim2 $model */

$this->title = 'Create Inacbg Data Terkirim2';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Data Terkirim2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-data-terkirim2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
