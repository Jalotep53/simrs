<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapuropname $model */

$this->title = 'Create Dapuropname';
$this->params['breadcrumbs'][] = ['label' => 'Dapuropnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapuropname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
