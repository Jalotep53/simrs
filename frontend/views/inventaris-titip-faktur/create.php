<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisTitipFaktur $model */

$this->title = 'Create Inventaris Titip Faktur';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-titip-faktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
