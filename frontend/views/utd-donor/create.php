<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDonor $model */

$this->title = 'Create Utd Donor';
$this->params['breadcrumbs'][] = ['label' => 'Utd Donors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-donor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
