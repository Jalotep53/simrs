<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Keanggotaan $model */

$this->title = 'Create Keanggotaan';
$this->params['breadcrumbs'][] = ['label' => 'Keanggotaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keanggotaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
