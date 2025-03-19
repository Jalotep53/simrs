<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala5 $model */

$this->title = 'Create Master Triase Skala5';
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala5s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-skala5-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
