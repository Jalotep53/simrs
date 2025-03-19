<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Sidikjari $model */

$this->title = 'Create Sidikjari';
$this->params['breadcrumbs'][] = ['label' => 'Sidikjaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidikjari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
