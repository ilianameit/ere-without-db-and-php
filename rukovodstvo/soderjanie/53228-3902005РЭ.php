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
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики двигателей</button></b></p></div></li>
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
<input type='checkbox' name='chacor' id='list2'/>
<label for='list2'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'> КРАТКОЕ ОПИСАНИЕ СИСТЕМ И МЕХАНИЗМОВ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Двигатель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Трансмиссия</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Рама и тягово-сцепное устройство</button></b></p></div></li>
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
<input type='checkbox' name='chacor' id='list3'/>
<label for='list3'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ключ автомобиля и противоугонное устройство</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочее место водителя</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list4'/>
<label for='list4'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов металлическая</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов</button></p></div></li>
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
<input type='checkbox' name='chacor' id='list5'/>
<label for='list5'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов пластиковая</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов на пластиковой панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы на щитке приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов с центральным блоком комбинации приборов (вариант)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Центральный блок комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы в центральном блоке комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок контрольных ламп на панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов с электронной комбинацией приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов электронная</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы в электронной комбинации приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блок контрольных ламп на панели приборов (вариант)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Выключатели/ переключатели на щитке приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель выключателей</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Кнопочные выключатели света</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Выключатели/ переключатели</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Дополнительная панель</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Радиооборудование (для отдельных комплектаций автомобилей)</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вещевые отсеки и ящики</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list6'/>
<label for='list6'>
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
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подкапотная лампа</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Проблесковые маяки</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатель указателя поворотов и дальнего света</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Звуковой сигнал</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стеклоочиститель и стеклоомыватель</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двери кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулировка положения сидений</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения сидений на пневмоподвеске</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ремни безопасности</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения рулевого колеса</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отопление и вентиляция кабины</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list7'/>
<label for='list7'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный воздушный отопитель кабины</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный воздушный отопитель кабины ф. «WEBASTO»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный воздушный отопитель кабины ф. «ПЛАНАР»</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Кондиционер</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Обогрев зеркал заднего вида</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list8'/>
<label for='list8'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление автомобилем</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля-самосвала</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля с электронными системами</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация нового автомобиля (обкатка)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Основные правила эксплуатации</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рекомендуемые режимы работы двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подготовка автомобиля к движению</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя с электронной системой управления подачей топлива</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование холостых оборотов для двигателя КАМАЗ с электронной системой управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режим «Круиз–контроль» для двигателя КАМАЗ с электронной системой управления</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление муфтой привода вентилятора двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление коробкой передач</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление раздаточной коробкой</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление блокировкой межосевого дифференциала раздаточной коробки</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межосевого и межколесного дифференциалов</button> </p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межосевого дифференциала</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межколесного дифференциала</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочая тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стояночная тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вспомогательная тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Антиблокировочная система тормозов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противобуксовочная система</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list9'/>
<label for='list9'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля с коробкой отбора мощности (КОМ)</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отбор мощности от коробки передач</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на пластиковой панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отбор мощности от раздаточной коробки</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на пластиковой панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Отбор мощности от двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на металлической панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение/ выключение КОМ на пластиковой панели приборов</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Буксирование автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление лебёдкой</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противооткатный упор</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противоподкатный откидной буфер</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Облицовочная панель</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list10'/>
<label for='list10'>
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
<input type='checkbox' name='chacor' id='list11'/>
<label for='list11'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля-тягача в составе автопоезда</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тягово-сцепное устройство</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тягово-сцепное устройство типа «Крюк-петля»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Установка каркаса и тента на платформе бортовых автомобилей КАМАЗ-43266, 53228</button></p></div></li>
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
<input type='checkbox' name='chacor' id='list12'/>
<label for='list12'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ В ХОЛОДНЫЙ ПЕРИОД</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Особенности эксплуатации автомобиля в холодный период</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list13'/>
<label for='list13'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателяКАМАЗв холодный период</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя с применением ЭФУ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя с электронной системой управления подачей топлива</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Предпусковой подогреватель</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Подогрев топлива</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list14'/>
<label for='list14'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'> ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ</button></b></p></label>
<div class='acor-body'>
<ul>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list15'/>
<label for='list15'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Ежедневное техническое обслуживание автомобиля</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при ежедневном техническом обслуживании (ЕТО)</button> </p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за автомобилем</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за ветровым стеклом</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Бачок стеклоомывателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание воздушного фильтра</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание шин</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Подкачка шин</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Поверка наличия конденсата в ресиверах</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в картере двигателя КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня охлаждающей жидкости</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива Preline ф.«MANN+HUMMEL»</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Аккумуляторные батареи</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list16'/>
<label for='list16'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'> ВОЗМОЖНЫЕ НЕИСПРАВНОСТИ АГРЕГАТОВ И СИСТЕМ АВТОМОБИЛЯ.САМОПОМОЩЬ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика и устранение неисправностей</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list17'/>
<label for='list17'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика электронных систем автомобиля по блинк-кодам</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика двигателя КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика АБС</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика электронных систем автомобиля на панели приборов с электронной комбинацией приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация неисправностей на панели приборов с электронной комбинацией приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Включение аварийной сигнализации</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Аварийное выключение аккумуляторной батареи</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list18'/>
<label for='list18'>
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
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от внешнего источника электрической энергии</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от аккумуляторной батареи другого автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле для автомобиля с металлической панелью приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле для автомобиля с пластиковой панелью приборов</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Проверка и замена предохранителей</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list19'/>
<label for='list19'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп (в зависимости от комплектации автомобиля)</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Требования безопасности</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Таблица применяемых в автомобиле ламп</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности электрооборудования и способы их устранения</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Опрокидывание и опускание кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Автомобильный домкрат</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list20'/>
<label for='list20'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса на переднем борту платформы самосвала</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса в горизонтальном положении на опоре</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Снятие, установка колёс на автомобиле</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list21'/>
<label for='list21'>
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
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Принудительное включение передач в раздаточной коробке</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности двигателя КАМАЗ и способы их устранения</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['xa']."" ?>' name='name'> ХРАНЕНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ta']."" ?>' name='name'> ТРАНСПОРТИРОВАНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ga']."" ?>' name='name'> ГАРАНТИИ ЗАВОДА-ИЗГОТОВИТЕЛЯ И ПОРЯДОК ПРЕДЪЯВЛЕНИЯ РЕКЛАМАЦИЙ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['yt']."" ?>' name='name'> УТИЛИЗАЦИЯ</button></b></p></div></li>
</ul>
</div>
<input type='checkbox' name='chacor' id='chacor2' />
<label for='chacor2'><p><b>ПРИЛОЖЕНИЯ</b></p></label>
<div class='acor-body'>
<ul class='countlist'>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril1']."" ?>' name='name'>Приложение 1. Содержание драгоценных металлов (сплавов) в изделиях электрооборудования  автомобилей КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril2']."" ?>' name='name'>Приложение 2. Химмотологическая карта автомобилей</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril3']."" ?>' name='name'>Приложение 3. Эксплуатационные материалы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril4']."" ?>' name='name'>Приложение (копия) Подогреватель предпусковой дизельный 14ТС-10-GP</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril5']."" ?>' name='name'>Приложение (копия) Подогреватель жидкостный малогабаритный ПРАМОТРОНИК-16ЖД24</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril6']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации ZF- ECOMID Синхронизированная коробка передач ZF 9S1110, 9S1310</button></p></div></li>
</ul>
</div>