<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cards</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/task1/css/style.css" />
</head>

<body>
  <div class="container">
    <div class="card-wrapper">
      <div class="card">
        <img src="/task1/img/armchair.jpg" alt="Кресло" class="card__image" />
        <span class="card__text">Парикмахерское кресло "Норм" гидравлическое</span>
        <span class="card__price">9 900 &#8381;</span>
        <button class="button card__button">Купить</button>
      </div>
      <!-- /.card -->
      <div class="card">
        <img src="/task1/img/armchair.jpg" alt="Кресло" class="card__image" />
        <span class="card__text">Парикмахерское кресло "Норм" гидравлическое</span>
        <span class="card__price">9 900 &#8381;</span>
        <button class="button card__button">Купить</button>
      </div>
      <!-- /.card -->
      <div class="card">
        <img src="/task1/img/armchair.jpg" alt="Кресло" class="card__image" />
        <span class="card__text">Парикмахерское кресло "Норм" гидравлическое</span>
        <span class="card__price">9 900 &#8381;</span>
        <button class="button card__button">Купить</button>
      </div>
      <!-- /.card -->
      <div class="card">
        <img src="/task1/img/armchair.jpg" alt="Кресло" class="card__image" />
        <span class="card__text">Парикмахерское кресло "Норм" гидравлическое</span>
        <span class="card__price">9 900 &#8381;</span>
        <button class="button card__button">Купить</button>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.card-wrapper -->
  </div>
  <!-- /.container -->
  <div class="modal">
    <div class="modal__overlay"></div>
    <!-- /.modal__overlay -->
    <div class="modal__dialog">
      <a href="#" class="modal__close"></a>
      <form action="php/send.php" method="POST" id="modal-buy-form">
        <label class="input__label" for="name">Имя</label>
        <input class="input modal__input" type="text" name="name" required />
        <label class="input__label" for="phone">Телефон</label>
        <input class="input modal__input" type="tel" name="phone" placeholder="+7(999)999-99-99" required />
        <label class="input__label" for="email">Email</label>
        <input class="input modal__input" type="email" name="email" required />
        <label class="input__label" for="product_name">Название товара</label>
        <input class="input modal__input" type="text" name="product_name" required />
        <input class="button modal__button" type="submit" value="Оформить заказ" />
      </form>
    </div>
    <!-- /.modal__dialog -->
  </div>
  <!-- /.modal -->
</body>
<script src="/task1/js/script.js"></script>

</html>