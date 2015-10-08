# BB-Code-Parser
Обработчик BB-кодов с небольшим функционалом для добавления собственных тегов.


### Доступные BB-коды

```[b]Bold[/b]``` - Жирное начертание шрифта

```[i]Italic[/i]``` - Курсивное начертание шрифта

```[u]Bold[/u]``` - Подчеркнутый шрифт

```[s]Bold[/s]``` - Зачеркнутый шрифт

```[code][b]<b>Some code</b>[/b][/code]``` - Вставка кода. Любые коды в этих тегах не обрабатываются

```[code="php"][b]<b>Some code with options</b>[/b][/code]``` - Вставка кода с опциями подсветки синтаксиса (опция используется только как класс для стилизации). Доступные опции: php|html|css|javascript

```[quote]Quote[/quote]``` - Цитата

```[quote="LOGIN | 00.00.00 - 00:00:00"]Quote[/quote]``` - Расширенная цитата с опциями для вставки информации. Формат LOGIN | 00.00.00 - 00:00:00

```[color="#aa0000"]Color[/color]``` - Цвет текста с поддержкой шестнадцатеричных цветов (hex)

```[background="#00aa00"]Background color[/s]``` - Цвет фона с поддержкой шестнадцатеричных цветов (hex)

```[size="1"]Font size[/size]``` - Размер шрифта. Доступные: 1|2|3|4|5|6|7

```[font="Arial"]Font face[/font]``` - Шрифт текста. Можно использовать Arial|Arial Black|Comic Sans MS|Courier New|Georgia|Impact|Tahoma|Times New Roman|Trebuchet MS|Verdana

```[url]https://github.com/qexyorg/BB-Code-Parser[/url]``` - URL адрес страницы

```[url="https://github.com/qexyorg/BB-Code-Parser"]URL[/url]``` - Выделение элемента ссылкой

```[spoiler]Spoiler[/spoiler]``` - Скрытый текст. Если опции не указаны, то используется название "Спойлер"

```[spoiler="Name"]Spoiler[/spoiler]``` - Скрытый текст с поддержкой опции названия спойлера

```[offtop]Offtop[/offtop]``` - Оффтоп. Элемент обрамляется специальными тегами, которые можно стилизовать.

```[reverse]esreveR[/reverse]``` - Последовательность символов в обратном порядке

```[left]Left align[/left]``` - Выравнивание по левому краю

```[center]Center align[/center]``` - Выравнивание по центру

```[right]Right align[/right]``` - Выравнивание по правому краю

```[img]http://mysite.com/logo.png[/img]``` - Изображение

```[email]admin@qexy.org[/email]``` - Ссылка на E-Mail адрес

```[line]``` - Горизонтальная линия

```[video="youtube"]https://link.to.video/?v=aaaaaa[/video]``` - Поддерживаются сервисы: youtube|vine|vk|vimeo|coub|twitch

```
[list="markers"]
	[*]Line 1
	[*]Line 2
[/list]
```
- Список. В качестве опций можно использовать markers|numbers (маркированный список и пронумерованный список соответствующе)

#### Смайлики

[:)]

[:(]

[;)]

[:bear:]

[:good:]

[:wall:]

[:D]

[:shy:]

[:secret:]

[:dance:]

[:rock:]

[:sos:]

[:girl:]

[:facepalm:]