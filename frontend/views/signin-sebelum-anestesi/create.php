<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SigninSebelumAnestesi $model */

$this->title = 'Create Signin Sebelum Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Signin Sebelum Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signin-sebelum-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
