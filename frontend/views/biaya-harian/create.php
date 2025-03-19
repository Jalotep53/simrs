<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaHarian $model */

$this->title = 'Create Biaya Harian';
$this->params['breadcrumbs'][] = ['label' => 'Biaya Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biaya-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
