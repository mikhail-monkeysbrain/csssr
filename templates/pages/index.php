<?
/**/
/** ВНИМАНИЕ!
* Этот файл сгенерирован автоматически и не подлежит редактированию.
* Исходники лежат в папке templates/src/jade
*/
/**/
?><?
define('PAGE_TITLE','CSSSR');
define('PAGE_SECTION_ID','0');
define('PAGE_JS_VIEW','Index');
?>
<div data-view="<?=PAGE_JS_VIEW?>" class="page page--index">
  <div class="container">
    <div class="input__text--wrapper">
            <label class="input--field__text">
              <p class="input--field--heading">Полное ФИО</p>
              <input type="text" name="name" value="Столповских Михаил Александрович" class="input__text"/>
            </label>
            <label class="input--field__text">
              <p class="input--field--heading">Год Рождения</p>
              <input type="text" name="name" value="1992" class="input__text"/>
            </label>
            <label class="input--field__text">
              <p class="input--field--heading">Место жительства</p>
              <input type="text" name="place" value="г. Магнитогорск, Россия" class="input__text"/>
            </label>
            <label class="input--field__text">
              <p class="input--field--heading">Скайп</p>
              <input type="text" name="skype" value="monkeysbrain" class="input__text"/>
            </label>
            <label class="input--field__text">
              <p class="input--field--heading">Почта</p>
              <input type="text" name="skype" value="monkeysbrain@yandex.ru" class="input__text"/>
            </label>
    </div>
    <div class="input__checkbox--wrapper">
      <h2>Расскажите о себе чекбоксами</h2>
      <p>Отметьте чекбоксами пункты, которые соответствуют вашим скиллам. Кстати, отсутствие опыта не означает, что у вас меньше шансов стать одним из наших товарищей. Это означает, что вы будете получать те задачи, с которыми гарантировано будете справляться.</p>
      <div class="input__checkbox--table">
                <label class="input--field__checkbox">
                  <input type="checkbox" name="BEM/OOCSS" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">БЭМ/OOCSS</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Pug (Jade)" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Pug (Jade)</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Stylus/LESS/SASS" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Stylus/LESS/SASS</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="SVG" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Работаю с SVG</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="semantic" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Верстаю семантично</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Accessibility" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Accessibility (A11Y)</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="ES2015/ES2016" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">ES2015/ES2016</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Gulp/GRUNT" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Gulp/GRUNT</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Webpack" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Webpack</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="WebGL" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Дружу с WebGL</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="jQuery" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">jQuery</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Angular" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Знаю/изучаю Angular</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="React" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Знаю/изучаю React</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Node.js" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Знаю/изучаю Node.js</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="Git" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Использую Git</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="eye" checked="checked" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">С глазомером всё ок</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="blog.csssr.ru" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Читаю <a href="http://blog.csssr.ru">blog.csssr.ru</a></p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="lazy" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">Я ленивый(-ая)</p>
                </label>
                <label class="input--field__checkbox">
                  <input type="checkbox" name="English" class="input__checkbox"/>
                  <p class="input--field--heading__checkbox">У меня хороший английский</p>
                </label>
      </div>
    </div>
    <div class="input__range--wrapper">
      <h2>Уровень владения JavaScript</h2>
      <div class="input__range"><span class="input__range--line"></span><span class="input__range--line"></span><span class="input__range--line"></span><span class="input__range--line"></span></div>
    </div>
    <div class="multiinput--wrapper">
      <h2>Расскажите о себе словами</h2>
      <p class="multiinput--description">Напишите пару предложений, чем вас привлекла наша вакансия и чего вы ожидаете от работы в CSSSR. Кстати, будет здорово, если при нехватке места для текста строки будут добавляться автоматически.</p>
      <label class="multiinput--container">
        <input type="text" value="Front-end разработчик. Живу и работаю в" class="multiinput"/>
        <input type="text" value="Белорецке, но рассматриваю варианты" class="multiinput"/>
        <input type="text" value="с релокацией." class="multiinput"/>
        <input type="text" value="Занимаюсь как статичной версткой, так и" class="multiinput"/>
        <input type="text" value="созданием сайтов под ключ." class="multiinput"/>
        <input type="text" value="Есть опыт работы с CMS 1C-Битрикс," class="multiinput"/>
        <input type="text" value="Люблю создавать красивые и удобные" class="multiinput"/>
        <input type="text" value="интерфейсы. Нравится решать" class="multiinput"/>
        <input type="text" value="нетривиальные задачи." class="multiinput"/>
        <input type="text" value="В короткие сроки могу разобраться с " class="multiinput"/>
        <input type="text" value="задачами, опыта решения которых раньше не" class="multiinput"/>
        <input type="text" value="имел." class="multiinput"/>
        <input type="text" value="Постоянно слежу за новыми плюшками," class="multiinput"/>
        <input type="text" value="которые появляются в как в сфере фронтенд" class="multiinput"/>
        <input type="text" value="разработки, так и вообще в вебе." class="multiinput"/>
      </label>
      <div class="inputHidden"></div>
    </div>
    <div class="input__radio--wrapper">
      <h2>Какие у вас планы на будущее?</h2>
      <p>Этот ответ ни на что не повлияет. Не беда, если в будущем ваши планы поменяются.</p>
      <div class="input__radio--container">
        <label class="input__radio--label">
          <input type="radio" name="future" value="markup" class="input__radio"/>
          <p class="input__radio--heading">Верстать</p>
        </label>
        <label class="input__radio--label">
          <input type="radio" name="future" value="js" checked="checked" class="input__radio"/>
          <p class="input__radio--heading">Прокачиваться в JS</p>
        </label>
        <label class="input__radio--label">
          <input type="radio" name="future" value="manage" class="input__radio"/>
          <p class="input__radio--heading">Менеджерство</p>
        </label>
        <label class="input__radio--label">
          <input type="radio" name="future" value="other" class="input__radio"/>
          <p class="input__radio--heading">Другое</p>
        </label>
      </div>
    </div>
    <div class="date">
      <label class="date--container">
        <p class="date--heading">Дата заполнения</p>
        <input type="text" name="date" value="11.01.2019" class="input__date"/>
      </label>
    </div>
  </div>
</div>