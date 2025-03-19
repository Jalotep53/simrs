<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatServicerequestLabMb $model */

$this->title = 'Create Satu Sehat Servicerequest Lab Mb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Servicerequest Lab Mbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-servicerequest-lab-mb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
