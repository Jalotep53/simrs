<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Returpasien $model */

$this->title = 'Create Returpasien';
$this->params['breadcrumbs'][] = ['label' => 'Returpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returpasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
