<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SignoutSebelumMenutupLuka $model */

$this->title = 'Create Signout Sebelum Menutup Luka';
$this->params['breadcrumbs'][] = ['label' => 'Signout Sebelum Menutup Lukas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signout-sebelum-menutup-luka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
