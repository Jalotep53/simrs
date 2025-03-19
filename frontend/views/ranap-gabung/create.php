<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RanapGabung $model */

$this->title = 'Create Ranap Gabung';
$this->params['breadcrumbs'][] = ['label' => 'Ranap Gabungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranap-gabung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
