<?php

use yii\helpers\Html;

$this->title = 'Test';
$this->params['breadcrumbs'][] = $this->title;
echo $name;
?>

<div class="site-test">
    <h1><?= Html::encode($this->title) ?> Page</h1>

    <p>
        welcome to Test page.
    </p>
</div>

<?php
echo "<pre>";
print_r($list);
?>
