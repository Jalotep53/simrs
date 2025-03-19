<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaSekali $model */

$this->title = 'Create Biaya Sekali';
$this->params['breadcrumbs'][] = ['label' => 'Biaya Sekalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biaya-sekali-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
