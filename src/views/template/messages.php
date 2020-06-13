<?php

$errors = []; 
$message = '';

if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

if($success){
    $message = [
        'type' => 'ok',
        'message' => $success
    ];
}

$alertType = '';

if($message['type'] === 'error'){
    $alertType = 'danger';
}else if($message['type'] === 'ok'){
    $alertType = 'success';
}

?>

<?php if($message): ?>
    <div role="alert" class="my-3 alert alert-<?= $alertType ?>">
        <?= $message['message'] ?>
    </div>
<?php endif ?>