<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KonverSat $model */

$this->title = 'Create Konver Sat';
$this->params['breadcrumbs'][] = ['label' => 'Konver Sats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konver-sat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
