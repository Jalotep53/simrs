<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tambahjaga $model */

$this->title = 'Create Tambahjaga';
$this->params['breadcrumbs'][] = ['label' => 'Tambahjagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tambahjaga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
