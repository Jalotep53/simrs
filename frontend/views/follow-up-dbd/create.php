<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\FollowUpDbd $model */

$this->title = 'Create Follow Up Dbd';
$this->params['breadcrumbs'][] = ['label' => 'Follow Up Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-up-dbd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
