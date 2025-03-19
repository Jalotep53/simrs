<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala1 $model */

$this->title = 'Create Data Triase Igddetail Skala1';
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igddetail Skala1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igddetail-skala1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
