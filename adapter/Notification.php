<?php

namespace adapter;

/**
 * Целевой интерфейс предоставляет интерфейс, которому следуют классы вашего
 * приложения.
 */
interface Notification
{
    public function send(string $title, string $message);
}