<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form — Московский Политех</title>
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
        <span class="eyebrow">01 / Форма</span>
        <h2 class="page-heading">Обратная&nbsp;связь</h2>
        <p class="page-sub">Заполните поля ниже. Мы&nbsp;ценим каждое обращение.</p>
    </div>

    <form class="feedback-form" action="https://httpbin.org/post" method="POST" accept-charset="UTF-8">

        <div class="field">
            <label for="name">Имя пользователя</label>
            <input type="text" id="name" name="name" placeholder="Иван Иванов" required>
        </div>

        <div class="field">
            <label for="email">E-mail пользователя</label>
            <input type="email" id="email" name="email" placeholder="ivanov@mospolytech.ru" required>
        </div>

        <div class="field">
            <label for="type">Тип обращения</label>
            <div class="select-wrap">
                <select id="type" name="type" required>
                    <option value="" disabled selected>Выберите тип…</option>
                    <option value="complaint">Жалоба</option>
                    <option value="suggestion">Предложение</option>
                    <option value="gratitude">Благодарность</option>
                </select>
            </div>
        </div>

        <div class="field">
            <label for="message">Текст обращения</label>
            <textarea id="message" name="message" rows="6" placeholder="Расскажите подробнее…" required></textarea>
        </div>

        <fieldset class="field field-group">
            <legend>Вариант ответа</legend>
            <label class="check">
                <input type="checkbox" name="reply[]" value="sms">
                <span class="check-box"></span>
                <span class="check-label">СМС</span>
            </label>
            <label class="check">
                <input type="checkbox" name="reply[]" value="email">
                <span class="check-box"></span>
                <span class="check-label">E-mail</span>
            </label>
        </fieldset>

        <div class="actions">
            <button type="submit" class="btn btn-primary">Отправить
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </button>
            <a href="result.php" class="btn btn-ghost">Перейти ко 2 странице →</a>
        </div>

    </form>
</main>

<footer class="site-footer">
    <span>Задание для самостоятельной работы</span>
</footer>

</body>
</html>
