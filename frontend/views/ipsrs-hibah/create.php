<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsHibah $model */

$this->title = 'Create Ipsrs Hibah';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrs-hibah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
