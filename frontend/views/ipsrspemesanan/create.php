<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrspemesanan $model */

$this->title = 'Create Ipsrspemesanan';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrspemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrspemesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
