<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuangOk $model */

$this->title = 'Create Ruang Ok';
$this->params['breadcrumbs'][] = ['label' => 'Ruang Oks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-ok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
