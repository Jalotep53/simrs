<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Pemberihibah $model */

$this->title = 'Create Pemberihibah';
$this->params['breadcrumbs'][] = ['label' => 'Pemberihibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemberihibah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
