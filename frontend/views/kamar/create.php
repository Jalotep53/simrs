<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kamar $model */

$this->title = 'Create Kamar';
$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
