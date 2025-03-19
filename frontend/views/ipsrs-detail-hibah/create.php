<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailHibah $model */

$this->title = 'Create Ipsrs Detail Hibah';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Detail Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrs-detail-hibah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
