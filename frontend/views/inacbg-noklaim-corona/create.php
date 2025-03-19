<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgNoklaimCorona $model */

$this->title = 'Create Inacbg Noklaim Corona';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Noklaim Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-noklaim-corona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
