<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatServicerequestLab $model */

$this->title = 'Create Satu Sehat Servicerequest Lab';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Servicerequest Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-servicerequest-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
