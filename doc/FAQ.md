# Часто задаваемые вопросы

**Как получить фото товаров разных размеров?**

Поле `photos` сущности `item` содержит список базовых URL для получения фотографий. Если к базовому URL добавть имя файла желаемого размера то получим полный URL фотографии.

Например, базовый URL `https://st-sima.r.worldssl.net/items/1277617/0/`, имя файла `700.jpg`, полный URL `https://st-sima.r.worldssl.net/items/1277617/0/700.jpg`

Список всех возможный имен файлов можно получить по API [https://www.sima-land.ru/api/v3/photo-size/](https://www.sima-land.ru/api/v3/photo-size/)

**Пытаюсь разобраться, не понимаю что установить итд?**

Прочитайте документацию, и посмотрите [пример приложения](https://github.com/sima-land/api-php-client/blob/master/parser_example.php).

Парсер - это инструемент для программиста. Если вы владелец сайта, например, на opencart, и ничего не понимаете 
в разработке, то это инструмент не для вас. 


**А можно ли через парсер получать только товары, которые в наличии?**

Перечень товаров которые возвращает парсер зависит от URL который вы ему передали. 
Смотрите параметры URL [здесь](https://www.sima-land.ru/api/v3/help/#Товар) раздел "параметры запроса"

**Class 'SimaLand\API\Rest\Cient' not found**

Скорее всего, вы забыли подключить загрузчик. Попробуйте добавить в ваш файл следующий код:

```
$loader = require_once __DIR__.'/vendor/autoload.php';
```