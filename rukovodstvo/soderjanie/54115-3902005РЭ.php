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
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики двигателя КАМАЗ</button></b></p></div></li>
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
<input type='checkbox' name='chacor' id='list3'/>
<label for='list3'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ключи автомобиля и противоугонное устройство</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочее место водителя</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list24'/>
<label for='list24'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Выключатели/ переключатели на панели приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Щиток приборов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель выключателей</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list4'/>
<label for='list4'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Радиооборудование</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Преобразователь напряжения</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вещевые отсеки и ящики</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list5'/>
<label for='list5'>
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
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Обогрев зеркал заднего вида</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Розетка внешнего запуска</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list6'/>
<label for='list6'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление автомобилем</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация нового автомобиля (обкатка)</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Основные правила эксплуатации</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рекомендуемые режимы работы двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подготовка автомобиля к движению</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление муфтой привода вентилятора двигателя</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление коробкой передач</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межосевого и межколесного дифференциалов</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тормозная система</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Антиблокировочная система тормозов</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля с коробкой отбора мощности (КОМ)</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Буксирование автомобиля</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противооткатный упор</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противоподкатный откидной буфер</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list7'/>
<label for='list7'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация автомобиля-тягача в составе автопоезда</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тягово-сцепное устройство типа «крюк-петля»</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тягово-сцепное устройство «шкворень-петля»</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list8'/>
<label for='list8'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация седельного автомобиля-тягача в составе автопоезда</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Сцепка тягача с полуприцепом</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Расцепка тягача с полуприцепом</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Установка каркаса и тента на платформе бортового автомобиля КАМАЗ-53215</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list9'/>
<label for='list9'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ В ХОЛОДНЫЙ ПЕРИОД</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Особенности эксплуатации автомобиля в холодный период</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list10'/>
<label for='list10'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя в холодный период</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя КАМАЗ с применением ЭФУ</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list11'/>
<label for='list11'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Предпусковой подогреватель</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Предпусковой подогреватель ПЖД-30</button></p></div></li>
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
<input type='checkbox' name='chacor' id='list12'/>
<label for='list12'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'> ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ</button></b></p></label>
<div class='acor-body'>
<ul>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list13'/>
<label for='list13'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Ежедневное техническое обслуживание автомобиля</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при ежедневном техническом обслуживании (ЕТО)</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за автомобилем</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list14'/>
<label for='list14'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за ветровым стеклом</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Бачок стеклоомывателя</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание воздушного фильтра</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list15'/>
<label for='list15'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание шин</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Подкачка шин</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Поверка наличия конденсата в ресиверах</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в картере двигателя КАМАЗ</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня охлаждающей жидкости</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива PRELINE ф. «MANN HUMMEL»</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Аккумуляторные батареи</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Ежедневное техническое обслуживание подогревателя ПЖД-30</button></b></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list16'/>
<label for='list16'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'> ВОЗМОЖНЫЕ НЕИСПРАВНОСТИ АГРЕГАТОВ И СИСТЕМ АВТОМОБИЛЯ.  САМОПОМОЩЬ</button></b></p></label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Включение аварийной сигнализации</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list17'/>
<label for='list17'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика электронных систем автомобиля</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика АБС</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация и устранение неисправностей</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list18'/>
<label for='list18'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от внешнего источника электрической энергии</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от аккумуляторной батареи другого автомобиля</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Аварийное выключение аккумуляторной батареи</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list19'/>
<label for='list19'>
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
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list20'/>
<label for='list20'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Проверка и замена предохранителей</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list21'/>
<label for='list21'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></b></p>
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
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Подъем и опускание кабины</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Автомобильный домкрат</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса</button></b></p></div></li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list22'/>
<label for='list22'>
<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Снятие, установка колес на автомобиле</button></b></p>
</label>
<div class='acor-body'>
<ul>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Снятие колеса</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка колеса</button></p></div></li>
</ul>
</div>
</div>
</li>
<li>
<div class='btn'  name='name'>
<input type='checkbox' name='chacor' id='list23'/>
<label for='list23'>
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
<div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности двигателя КАМАЗ и способы их устранения</button></b></p></div></li>
<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности седельно-сцепного устройства и способы их устранения</button></b></p></div></li>
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
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril1']."" ?>' name='name'>Приложение А Содержание драгоценных металлов (сплавов) в изделиях электрооборудования автомобилей КАМАЗ</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril2']."" ?>' name='name'>Приложение Б Химмотологическая карта автомобилей КАМАЗ моделей 53215, -54115</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril3']."" ?>' name='name'>Приложение В Эксплуатационные материалы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril4']."" ?>' name='name'>Приложение (копия) Подогреватели предпусковые дизельные14ТС-10, 14ТС-10-12В</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril5']."" ?>' name='name'>Приложение (копия) Подогреватель жидкостный малогабаритный ПРАМОТРОНИК-16ЖД-24</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril6']."" ?>' name='name'>Приложение (копия) MANN+HUMMEL Europiclon® серия 45 Руководство по техническому обслуживанию воздушного фильтра</button></p></div></li>
</ul>
</div>