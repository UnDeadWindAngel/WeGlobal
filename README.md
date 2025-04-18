# WeGlobal
Мой Пет проект Симфони



18-04-2025

решеные ошибки:

Изменения в проекте:

в фильтрах:

в репозиториях:

в конфигах:

в сущностях: 

в контроллерах:

в базе:

в шаблонах:

в API:

ошибки:

17-04-2025

решеные ошибки:
исправлена путем пересоздания сущьности тега ошибка метода GetId класса тег используется несуществующий метод getId класса ArrayCollection.

Изменения в проекте:
Добавлена дериктория с фильтрами.

в фильтрах:
Создан фильтр блогов.

в репозиториях:
в репозитории блога создан метод поиска по фильтру.

в сущностях: 
пересоздана сущьность Tag, сущности Tag и Blog связаны связью многие ко многим через промежуточную таблицу.
в сущности Blog установлен атрибут NotBlank чтобы поля проверялись на пустоту и добавлен вывод соответствующих оповещений.

в контроллерах:
в Blog контроллер добавлено использование объекта BlogFilter.

в базе:
пересозданы таблицы tag и tags_to_blog.
установлены связи таблицы blog и tags_to_blog, и tag и tags_to_blog.

в шаблонах:
Создан преобразователь данных для преобразования массива тегов в строку и из строки в массив объектов.
Сделана валидация формы средствами php через Assert.
Добавлено поле поиска по названию блога на основной странице.
Добавлена генерация формы фильтра.
Изменена форма блогов в нее добавлено поле ввода текста для поиска.

16-04-2025

решеные ошибки:
ошибка не валидности csrf токена, решено. 
CSRF токен создается и валидируется в assets.controllers.csrf_protection_controller.js
так как было принято взять за основу тему бутстрап 5 в файле стилей приложения валидации csrf 
было решено что надо заменить цвет фона приложения с голубого на  rgb(33,37,41)
для того чтобы оставить и не отключать csrf валидацию форм.

Изменения в проекте:

в конфигах:
в конфигурационном файле framework.yaml была включена валидация csrf как советуется 
на сайте разработчиков symfony.
в файле окружения env. была закоментирована строка с подключение к базе postgree.
создан файл env.local в него перенесено подключение к основной базе данных.

в сущностях:
создана сущьность Tag с полями id, name.
cвязаны сущности Tag и Blog связью многие ко многим.

в базе:
созданы таблицы tags и tags_to_blogs.
добавлены поля в таблицу tags name и id.
добавлены поля в таблицу tags_to_blog blog и tag.
добавлены связи таблиц tag и tags_to_blogs, blog и tags_to_blogs.

в шаблонах:
на основной странице приложения был добавлен заголовок как в базовом шаблоне.
на основной странице был подключен основной js symfony.
в форме BlogType добавлено поле Tags.

ошибки:
вместо метода GetId класса тег используется несуществующий метод getId класса ArrayCollection.

15-04-2025

Изменения в проекте:

в сущностях:
созданы сущности Blog, Category.
создан круд сущностей Blog и Category.
в сущности Blog созданы поля id, tittle, description, text.
в сущности Blog добавлено поле category с выводом.
в сущности Category созданы поля id, name.
сущности Blog и Category связаны по полям category и id соответственно.

в контроллерах:
созданы контроллеры Default, Category, Blog.

в базе:
созданы через миграции таблицы category с полями id и name, и blog с полями id, tittle, description, text и category.
таблицы category и blog связаны между собой через поля id и category соответственно.

в шаблонах:
создан шаблон контроллера default.
созданы автоматически шаблоны для сущностей category, blog.
в шаблоне blog/show.html.twig добавлен вывод поля категория.
подключение бутстрап 5 к базовому шаблону.
изменен заголовок базового шаблона.
изменен заголовок шаблона страницы главная.
создан шаблон главной страницы приложения.
изменено перенаправление шаблонов, на основной.
отредактированы отображения кнопок на форме создания блога.

ошибки: 
столкнулся с ошибкой csrf токена при создании нового объекта.
