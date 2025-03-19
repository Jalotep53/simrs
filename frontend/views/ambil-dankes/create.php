<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AmbilDankes $model */

$this->title = 'Create Ambil Dankes';
$this->params['breadcrumbs'][] = ['label' => 'Ambil Dankes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambil-dankes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
