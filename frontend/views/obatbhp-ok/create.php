<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ObatbhpOk $model */

$this->title = 'Create Obatbhp Ok';
$this->params['breadcrumbs'][] = ['label' => 'Obatbhp Oks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obatbhp-ok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
