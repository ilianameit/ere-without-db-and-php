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
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Техническая характеристика автомобилей</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Таблицы дополнительных технических характеристик</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list2'/>
<label for='list2'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики двигателей</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Двигатели КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Двигатели CUMMINS</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Давление воздуха в шинах</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Инструмент и принадлежности, запасные части и эксплуатационная документация, которыми должен быть укомплектован автомобиль</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Маркировка автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Маркировка двигателя</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Схема пломбирования</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list3'/>
<label for='list3'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'> КРАТКОЕ ОПИСАНИЕ СИСТЕМ И МЕХАНИЗМОВ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Двигатель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Трансмиссия</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Рама, тягово-сцепное и седельно-сцепное устройства</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Подвеска</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Рулевое управление</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Тормозная система</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Кабина</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Платформа</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Электрооборудование</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Электронные системы управления</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list4'/>
<label for='list4'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ключи автомобиля и противоугонное устройство</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочее место водителя</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочее место водителя в кабине автомобиля с правым рулевым управлением</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list5'/>
<label for='list5'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов металлическая</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с левым рулевым управлением</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с правым рулевым управлением</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с правым рулевым управлением (вариант)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с правым рулевым управлением (вариант 1)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блоки контрольных ламп</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Выключатели/ переключатели на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель выключателей</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list6'/>
<label for='list6'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов пластиковая</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с левым рулевым управлением</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов на пластиковой панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы на щитке приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов с центральным блоком комбинации приборов (вариант)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Центральный блок комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы в центральном блоке комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок контрольных ламп на панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с левым рулевым управлением с электронной комбинацией приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов для автомобиля с правым рулевым управлением с электронной комбинацией приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов электронная</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы в электронной комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок контрольных ламп на панели приборов (вариант)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Выключатели/ переключатели на пластиковой панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель выключателей</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Кнопочные выключатели света</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Клавишные выключатели/ переключатели</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Дополнительная панель</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Дополнительная панель для автомобиля с правым рулевым управлением</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Радиооборудование (для отдельных комплектаций автомобилей)</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Преобразователь напряжения</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вещевые отсеки и ящики</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list7'/>
<label for='list7'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Осветительные приборы</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатель света</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контурные и габаритные фонари</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ближний свет</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Дальний свет</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Передние противотуманные фары</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Задний противотуманный фонарь</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Фонари автопоезда</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Внутреннее освещение кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование угла наклона фар</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подключение светильника подвесного</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Прожектор освещения сцепного устройства</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочая фара</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подкапотная лампа</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Проблесковые маяки</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатель указателя поворотов и дальнего света</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Звуковой сигнал</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стеклоочиститель и стеклоомыватель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двери кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулировка положения сидений</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения сидений на пневмоподвеске</button></b></p></div></li> 
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ремни безопасности</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Верхнее спальное место</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения рулевого колеса</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list8'/>
<label for='list8'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отопление и вентиляция кабины</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный воздушный отопитель кабины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный воздушный отопитель кабины ф. «WEBASTO»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный воздушный отопитель кабины ф. «ПЛАНАР»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Кондиционер</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Обогрев зеркал заднего вида</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list9'/>
<label for='list9'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление автомобилем</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля-самосвала</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля с электронными системами</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Предупреждения</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации двигателя Cummins с электронной системой управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация нового автомобиля (обкатка)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Основные правила эксплуатации</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рекомендуемые режимы работы двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подготовка автомобиля к движению</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя с электронной системой управления подачей топлива</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование холостых оборотов для двигателя с электронной системой управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двигатель КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двигатель Cummins</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режим «Круиз - контроль» для двигателя с электронной системой управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двигатель КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двигатель Cummins</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двухконтурная система рулевого управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление муфтой привода вентилятора двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление коробкой передач</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Коробка передач с автоматизированным управлением</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межосевого и межколесного дифференциалов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Антиблокировочная система тормозов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противобуксовочная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление ретардером</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление пневмоподвеской</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list10'/>
<label for='list10'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля с коробкой отбора мощности (КОМ)</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отбор мощности от коробки передач</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на пластиковой панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отбор мощности от двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Коробка отбора мощности интегрирована в картер сцепления коробки передач модели ZF (NMV)</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Буксирование автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противооткатный упор</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противоподкатный откидной буфер</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Облицовочная панель</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list11'/>
<label for='list11'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля-самосвала</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подъем/опускание платформы одиночного самосвала</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля с самосвальным прицепом</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list12'/>
<label for='list12'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля-тягача в составе автопоезда</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тягово-сцепное устройство</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list13'/>
<label for='list13'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация седельного  в составе автопоезда</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Сцепка/расцепка тягача с полуприцепом</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация гидрофицированного седельного автомобиля - тягача с самосвальным полуприцепом</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация гидрофицированного седельного автомобиля - тягача с  цистерной</button></p></div></li>
</ul>
</div>
</div>
</li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list14'/>
<label for='list14'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ В ХОЛОДНЫЙ ПЕРИОД</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Особенности эксплуатации автомобиля в холодный период</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list15'/>
<label for='list15'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя в холодный период</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя Cummins</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя КАМАЗ с применением ЭФУ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя КАМАЗ с электронной системой управления подачей топлива</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Предпусковой подогреватель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Подогрев топлива</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list16'/>
<label for='list16'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'> ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ</button></b></p></label>
<div class='acor-body'>
<ul>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list17'/>
<label for='list17'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Ежедневное техническое обслуживание автомобиля</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при ежедневном техническом обслуживании (ЕТО)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за автомобилем</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за ветровым стеклом</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Бачок стеклоомывателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Замена воздушного фильтра</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание шин</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Подкачка шин</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Поверка наличия конденсата в ресиверах</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в картере двигателя КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в картере двигателя Cummins</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня охлаждающей жидкости</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в гидросистеме механизма подъема платформы</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list18'/>
<label for='list18'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива PRELINE ф. «MANN HUMMEL»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива ф. «CF»</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Слив отстоя из фильтра-водоотделителя (для отдельных комплектаций двигателя Cummins серии ISB)</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Аккумуляторные батареи</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list19'/>
<label for='list19'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'> ВОЗМОЖНЫЕ НЕИСПРАВНОСТИ АГРЕГАТОВ И СИСТЕМ АВТОМОБИЛЯ.  САМОПОМОЩЬ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Включение аварийной сигнализации</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list20'/>
<label for='list20'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика электронных систем автомобиля</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Двигатель КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Двигатель Cummins</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика АБС</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика электронных систем автомобиля на  панели приборов  с  электронной комбинацией приборов</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list21'/>
<label for='list21'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация и устранение неисправностей</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация и устранение неисправностей. Панель приборов с электронной комбинацией приборов</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list22'/>
<label for='list22'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от внешнего источника электрической энергии</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от АКБ другого автомобиля</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Аварийное выключение аккумуляторной батареи</button></b></p></div></li>
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
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Гидроусилитель руля не обеспечивает достаточного усилия</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Растормаживание стояночной тормозной системы при аварийных ситуациях</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле для автомобиля с двигателем  экологического  класса 2  с  левым рулевым управлением и металлической панелью приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле для автомобиля с двигателем  экологического  класса 3  с  левым рулевым управлением и пластиковой панелью приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле для автомобиля с двигателем экологического класса 3 с правым рулевым управлением и пластиковой панелью приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Проверка и замена предохранителей</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list24'/>
<label for='list24'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Требования безопасности</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп (в зависимости от комплектации автомобиля)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Таблица применяемых в автомобиле ламп</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности электрооборудования и способы их устранения</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Подъем и опускание кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Автомобильный домкрат</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list25'/>
<label for='list25'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса в горизонтальном положении</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса на переднем борту платформы самосвала</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Снятие, установка колёс на автомобиле</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list26'/>
<label for='list26'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Демонтаж, монтаж шин</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Демонтаж, монтаж бескамерной шины</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Демонтаж, монтаж камерной шины</button></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности двигателя КАМАЗ и способы их устранения</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности седельно-сцепного устройства и способы их устранения</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['xa']."" ?>' name='name'> ХРАНЕНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ta']."" ?>' name='name'> ТРАНСПОРТИРОВАНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ga']."" ?>' name='name'> ГАРАНТИИ  И ПОРЯДОК ПРЕДЪЯВЛЕНИЯ РЕКЛАМАЦИЙ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['yt']."" ?>' name='name'> УТИЛИЗАЦИЯ</button></b></p></div></li>
</ul>
</div>
<input type='checkbox' name='chacor' id='chacor2' />
<label for='chacor2'><p><b>ПРИЛОЖЕНИЯ</b></p></label>
<div class='acor-body'>
<ul class='countlist'>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril1']."" ?>' name='name'>Приложение 1. Содержание драгоценных металлов (сплавов) в изделиях электрооборудования автомобилей КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril2']."" ?>' name='name'>Приложение 2. Химмотологическая карта автомобилей</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril3']."" ?>' name='name'>Приложение 3. Эксплуатационные материалы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril4']."" ?>' name='name'>Приложение (копия) Подогреватель предпусковой дизельный 14ТС-10-GP</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril5']."" ?>' name='name'>Приложение (копия) Подогреватель жидкостный малогабаритный ПРАМОТРОНИК-16ЖД24 </button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril6']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации ZF-ECOMID. Синхронизированная коробка передач ZF 9S 1110, 9S 1310</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril7']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации Грузовые автомобили. ZF-NewEcosplit </button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril8']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации ZF-INTARDER. Встроенный тормоз- замедлитель (интардер) для грузовых автомобилей и автобусов с коробкой передач ZF</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril9']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации ZF-NMV 221 Приводимая от двигателя коробка отбора мощности для коробок передач ZF Ecosplit 16 S 151 и 16 S 221</button></p></div></li>
</ul>
</div>