<?php
// По умолчанию получаем заголовки с сайта Московского Политеха.
// Пользователь может ввести любой другой URL в форме ниже.
$defaultUrl = 'https://mospolytech.ru';
$url = isset($_GET['url']) && !empty(trim($_GET['url'])) ? trim($_GET['url']) : $defaultUrl;

// Подавляем предупреждения, если URL недоступен — обработаем сами.
$headers = @get_headers($url, 1);

if ($headers === false) {
    $output = "Не удалось получить заголовки с адреса: {$url}\n";
    $output .= "Проверьте корректность URL и доступность ресурса.";
} else {
    $output = "URL: {$url}\n";
    $output .= str_repeat('—', 60) . "\n\n";
    foreach ($headers as $key => $value) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }
        if (is_int($key)) {
            $output .= $value . "\n";
        } else {
            $output .= $key . ': ' . $value . "\n";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get_headers — Московский Политех</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;600;800&family=Manrope:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

<header class="site-header">
    <a href="index.php" class="logo">
        <img src="assets/logo.png" alt="Московский Политех">
    </a>
    <h1 class="site-title">Feedback form</h1>
    <div class="header-spacer"></div>
</header>

<main class="page">
    <div class="page-intro">
        <span class="eyebrow">02 / Результат</span>
        <h2 class="page-heading">get_headers()</h2>
        <p class="page-sub">Заголовки HTTP-ответа для указанного URL.</p>
    </div>

    <form class="url-form" action="result.php" method="GET">
        <div class="field">
            <label for="url">URL для запроса</label>
            <div class="url-row">
                <input type="url" id="url" name="url" value="<?= htmlspecialchars($url) ?>" placeholder="https://example.com">
                <button type="submit" class="btn btn-primary btn-compact">Запросить</button>
            </div>
        </div>
    </form>

    <div class="result-block">
        <div class="result-label">
            <span>Результат</span>
            <span class="result-meta">PHP · get_headers($url, 1)</span>
        </div>
        <textarea class="result-area" readonly><?= htmlspecialchars($output) ?></textarea>
    </div>

    <div class="actions">
        <a href="index.php" class="btn btn-ghost">← Вернуться к форме</a>
    </div>
</main>

<footer class="site-footer">
    <span>Задание для самостоятельной работы</span>
</footer>

</body>
</html>
