<?php
//1
$date = '2025-12-31';
$timestamp = strtotime($date);
if (checkdate(date('m', $timestamp), date('d', $timestamp), date('y', $timestamp)) and $timestamp) {
    echo 'Дата корректна';
} else echo 'bogus';
echo '<br>';
//2
$date = '2025-02-29';
$timestamp = strtotime($date);
if (checkdate(date('m', $timestamp), date('d', $timestamp), date('y', $timestamp)) and $timestamp) {
    echo 'Дата корректна';
} else echo 'bogus';