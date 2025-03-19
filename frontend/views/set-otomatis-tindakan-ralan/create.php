<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalan $model */

$this->title = 'Create Set Otomatis Tindakan Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-otomatis-tindakan-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
