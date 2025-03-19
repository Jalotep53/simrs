<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala1 $model */

$this->title = 'Create Master Triase Skala1';
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-skala1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
