<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/3.0.1/modern-normalize.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <title>TasteHub</title>
</head>
    <body>
        <main>
            <header class="header">
                <div class="container">
                    <nav class="navigation">
                        <div class="logo">
                            <a href="index.html">Taste<span>Hub</span></a>
                        </div>
                        <ul class="nav-list">
                            <li><a href="index.html">Головна</a></li>
                            <li><a href="menu.html">Меню</a></li>
                            <li><a href="contact.html">Контакти</a></li>
                            <li><a href="order.php" class="btn-order">Замовити</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <section class="hero">
                <div class="container">
                    <h1>Оформити замовлення</h1>
                    <form action="process.php" method="POST">
                        <label>Твоє ім'я: <input type="text" name="customer_name" required></label><br>
                        <label>Телефон: <input type="tel" name="customer_phone" required></label><br>
                        <label>Що замовляєте? 
                            <select name="dish">
                                <option value="pizza">Піца</option>
                                <option value="burger">Бургер</option>
                                <option value="pasta">Паста</option>
                            </select>
                        </label><br>
                        <button type="submit">Надіслати замовлення</button>
                    </form>
                </div>
            </section>

            <footer class="footer">
                <div class="container">
                    <p>&copy; 2024 TasteHub. Всі права захищені.</p>
                </div>
            </footer>
        </main>
    </body>
</html>