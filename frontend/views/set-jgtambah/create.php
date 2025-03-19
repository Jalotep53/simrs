<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetJgtambah $model */

$this->title = 'Create Set Jgtambah';
$this->params['breadcrumbs'][] = ['label' => 'Set Jgtambahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-jgtambah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
