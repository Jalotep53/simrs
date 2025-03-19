<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala3 $model */

$this->title = 'Create Master Triase Skala3';
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-skala3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
