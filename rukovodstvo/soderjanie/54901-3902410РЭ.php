<?php
try {
	$kompl = $_COOKIE['Coockie-kompl'];

	$sql = "SELECT * FROM erekompl INNER JOIN ererazdel ON erekompl.idere = ererazdel.id WHERE kompl = '$kompl' -- ";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $res1 = $statement->fetchAll();

    foreach ($res1 as $rw1) {
		
    }
} 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}

?> 

 <input type='checkbox' name='chacor' id='chacor1'/>
<label for='chacor1'><p><b>Основные разделы</b></p></label>
<div class='acor-body'>
<ul class='countlist'>
  <li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vv']."" ?>' name='name'> ВАШЕМУ ВНИМАНИЮ</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list1'/>
<label for='list1'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'> ЭКСПЛУАТАЦИОННЫЕ ПАРАМЕТРЫ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Таблица дополнительных технических характеристик</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики двигателя</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Давление воздуха в шинах</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики бортовой информационной системы (БИС)</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Эксплуатационная документация, запасные части, инструменты и принадлежности, которыми должен быть укомплектован автомобиль</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Маркировка автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Маркировка двигателя</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Схема пломбирования автомобиля</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list2'/>
<label for='list2'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'> КРАТКОЕ ОПИСАНИЕ СИСТЕМ И МЕХАНИЗМОВ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Двигатель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Трансмиссия</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Рама и опорно-сцепное (седельно-сцепное) устройство</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Подвеска</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Рулевое управление</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Тормозная система</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Кабина</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Электрооборудование</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Электронные системы управления</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list3'/>
<label for='list3'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочее место водителя</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пульт дистанционного управления</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электронный замок выключателя приборов и стартера</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Кнопки управления на рулевом колесе</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list4'/>
<label for='list4'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Описание комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные сигнализаторы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Информационные сообщения на дисплее</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные сигнализаторы на дисплее комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатационное меню</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пункт меню «Параметры»</button> </p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пункт меню «Данные по поездке»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пункт меню «Диагностика»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пункт меню «Настройки»</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list5'/>
<label for='list5'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Бортовая информационная система (БИС)</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Органы управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пульт управления БИС</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение БИС. Подсветка дисплея</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Главная страница дисплея БИС</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Телефон</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Навигация</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Радио</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Медиа</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Приложения</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Интернет</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Диагностика</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подогреватель</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Документы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Помощь</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Календарь</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Настройки БИС</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Картридер</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list6'/>
<label for='list6'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блоки переключателей</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блоки переключателей на панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок переключателей на двери водителя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок переключателей на двери пассажира</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок переключателей над ветровым стеклом</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок переключателей на спальном месте</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинированный переключатель</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок управления наружным освещением</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list7'/>
<label for='list7'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление наружным освещением</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатель света</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Свет для движения в дневное время</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контурные, габаритные фонари</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ближний свет</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Дальний свет</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Указатели поворота</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Передние противотуманные фары</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Задние противотуманные фонари</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Фонари автопоезда</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Прожектор освещения сцепного устройства</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Предупредительный световой сигнал</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование угла наклона фар</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стеклоочистители</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стеклоомыватель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Звуковой сигнал</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list8'/>
<label for='list8'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двери кабины</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка/ разблокировка дверей снаружи кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка/ разблокировка дверей изнутри кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Опускание и подъем боковых стекол водителя/ пассажира</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вентиляционный люк (на крыше)</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list9'/>
<label for='list9'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Наружные зеркала</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Положение наружных зеркал</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения верхней секции зеркала заднего вида</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Обогрев зеркал</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения сидений</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ремни безопасности</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list10'/>
<label for='list10'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Спальное место</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Верхнее спальное место</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Нижнее спальное место</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Шторы кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения рулевого колеса</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list11'/>
<label for='list11'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Климатическая установка</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок управления климатической установкой</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Система климат-контроля</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление климатической установкой в ручном режиме</button> </p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный отопитель кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Внутреннее освещение кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электророзетки</button></b></p></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Часы-будильник</button></p></div></li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тахограф цифровой</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вещевые ящики и полки</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list13'/>
<label for='list13'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Устройство вызова экстренных оперативных служб (ЭРА-ГЛОНАСС)</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Назначение и органы управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режимы работы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Экстренный вызов «SOS»</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение и выключение питания в системе электрооборудования автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Оборудование для питания двигателя компримированным природным газом</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Баллон газовый</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Маркировка газового баллона</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля с газовым оборудованием</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при проведении технического обслуживания и ремонта газовой аппаратуры</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования пожарной безопасности</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация нового автомобиля (обкатка)</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Основные правила эксплуатации</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рекомендуемые режимы работы двигателя</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключение с системы питания двигателя с дизельного топлива на двухтопливный режим работы с использованием компримированного природного газа</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подготовка автомобиля к движению</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list14'/>
<label for='list14'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Останов двигателя</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режим «круиз–контроль»</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Настраиваемое ограничение скорости</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление коробкой передач с автоматизированным управлением</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межколесного дифференциала</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list15'/>
<label for='list15'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тормозная система</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочая тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Запасная тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стояночная тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вспомогательная тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электронная тормозная система EBS</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление рабочей и вспомогательной тормозными системами с помощью тормозной педали («Brake-Management»)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Антиблокировочная система тормозов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противобуксовочная система (AТС)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Система курсовой устойчивости</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Функция удержания автомобиля на уклоне «Hill Holder»</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля с коробкой отбора мощности (КОМ)</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list16'/>
<label for='list16'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электронная система управления пневмоподвеской</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Основные функции</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление пневмоподвеской</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противооткатный упор</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Облицовочная панель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Буксирование автомобиля</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list17'/>
<label for='list17'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация седельного автомобиля-тягача в составе автопоезда</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Трехкомпонентные крылья задней тележки</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Сцепка/ расцепка тягача с полуприцепом</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Порт для подключения пневмопистолета</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Наполнение баллонов сжатым газом</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list18'/>
<label for='list18'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ В ХОЛОДНЫЙ ПЕРИОД ВРЕМЕНИ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Особенности эксплуатации автомобиля в холодный период</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя в холодный период</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list19'/>
<label for='list19'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Предпусковой подогреватель</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Включение/ выключение подогревателя с помощью БИС</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Включение/ выключение подогревателя с помощью выключателя</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Подогрев топлива</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Подогрев восстановителя оксидов азота</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list20'/>
<label for='list20'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'> ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ</button></b></p></label>
<div class='acor-body'>
<ul>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list21'/>
<label for='list21'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Ежедневное и еженедельное техническое обслуживание автомобиля</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при ежедневном техническом обслуживании</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при еженедельном техническом обслуживании</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Требования к персоналу, обслуживающему газовое оборудование</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание и подкачка шин</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в картере двигателя КАМАЗ с помощью измерительного щупа</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка наличия конденсата в ресиверах</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня охлаждающей жидкости</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Салонный фильтр</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за автомобилем</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за ветровым стеклом</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Рекомендации по проверке состояния и герметичности приборов и трубопроводов систем автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в коробке передач</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в бачке системы рулевого управления</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Слив жидкости из фильтра очистки газа</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Система нейтрализации отработавших газов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Аккумуляторные батареи</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Замена элемента питания в пульте дистанционного управления</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list22'/>
<label for='list22'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'> ВОЗМОЖНЫЕ НЕИСПРАВНОСТИ АГРЕГАТОВ И СИСТЕМ АВТОМОБИЛЯ. САМОПОМОЩЬ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Контроль возможных неисправностей в системах автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация на комбинации приборов и предложения по устранению неисправностей</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация неисправностей осветительных приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация неисправностей реле и предохранителей</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация неисправностей датчиков</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Включение аварийной сигнализации</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от внешнего источника электрической энергии</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от аккумуляторной батареи другого автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Износ тормозных накладок</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list23'/>
<label for='list23'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Неисправности рулевого управления</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Люфт рулевого управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Гидроусилитель руля не обеспечивает достаточное усилие при вращении рулевого колеса</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Воздушный фильтр топливного бака</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена воздушных фильтров системы питания воздухом</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Растормаживание стояночной тормозной системы при аварийных ситуациях</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list24'/>
<label for='list24'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Реле и предохранители</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Расположение реле и предохранителей</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Расположение реле и предохранителей газодизельного оборудования</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Блок силовых предохранителей</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Проверка и замена предохранителей</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list25'/>
<label for='list25'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Требования безопасности</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности электрооборудования и способы их устранения</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list26'/>
<label for='list26'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Опрокидывание кабины</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Требования безопасности перед опрокидыванием кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Электрогидравлический механизм опрокидывания кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Гидравлический механизм опрокидывания кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Рекомендации по проверке состояния и работы гидрозамков и крепления гидроцилиндра</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности в системе опрокидывания кабины</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Автомобильный домкрат</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Снятие, установка колес на автомобиль</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Демонтаж, монтаж шины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности двигателя КАМАЗ и способы их устранения</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности БИС и способы их устранения</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['xa']."" ?>' name='name'> ХРАНЕНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ta']."" ?>' name='name'> ТРАНСПОРТИРОВАНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ga']."" ?>' name='name'> ГАРАНТИИ ПРЕДПРИЯТИЯ-ИЗГОТОВИТЕЛЯ И ПОРЯДОК ПРЕДЪЯВЛЕНИЯ РЕКЛАМАЦИЙ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['yt']."" ?>' name='name'> УТИЛИЗАЦИЯ</button></b></p></div></li>
</ul>
</div>
<input type='checkbox' name='chacor' id='chacor2' />
<label for='chacor2'><p><b>ПРИЛОЖЕНИЯ</b></p></label>
<div class='acor-body'>
<ul class='countlist'>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril1']."" ?>' name='name'>Приложение Б. Химмотологическая карта автомобиля КАМАЗ-54901</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril2']."" ?>' name='name'>Приложение В. Эксплуатационные материалы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril3']."" ?>' name='name'>Приложение (копия) Отопитель воздушный PLANAR-44D-24-GP-CAN-4555 Руководство по эксплуатации АДВР.304.00.00.000 РЭ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril4']."" ?>' name='name'>Приложение (копия) Подогреватель предпусковой дизельный 14ТС-Mini-24-CAN-ДМ-С Руководство по эксплуатации АДВР.233.00.00.000 РЭ</button></p></div></li>
</ul>
</div>