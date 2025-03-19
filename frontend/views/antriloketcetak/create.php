<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Antriloketcetak $model */

$this->title = 'Create Antriloketcetak';
$this->params['breadcrumbs'][] = ['label' => 'Antriloketcetaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antriloketcetak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
