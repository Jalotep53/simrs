<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatServicerequestRadiologi $model */

$this->title = 'Create Satu Sehat Servicerequest Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Servicerequest Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-servicerequest-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
