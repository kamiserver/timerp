<?php
session_start();

if (!isset($_SESSION['timeRemaining'])) {
    $_SESSION['timeRemaining'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hours = intval($_POST['hours']);
    $minutes = intval($_POST['minutes']);
    $seconds = intval($_POST['seconds']);
    $_SESSION['timeRemaining'] = ($hours * 3600) + ($minutes * 60) + $seconds;
    header('Location: index.php');
    exit;
}

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'getTime') {
        echo json_encode(['timeRemaining' => $_SESSION['timeRemaining']]);
    } elseif ($_GET['action'] === 'setTime' && isset($_GET['time'])) {
        $_SESSION['timeRemaining'] = intval($_GET['time']);
    }
}
