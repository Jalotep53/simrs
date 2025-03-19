<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Sidikjaripasien $model */

$this->title = 'Create Sidikjaripasien';
$this->params['breadcrumbs'][] = ['label' => 'Sidikjaripasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidikjaripasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
