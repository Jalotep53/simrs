<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrsreturbeli $model */

$this->title = 'Create Ipsrsreturbeli';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrsreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrsreturbeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
