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
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Технические характеристики двигателей</button></b></p></div></li>
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Давление воздуха в шинах</button></b></p></div></li>
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Эксплуатационная документация, запасные части, инструменты и принадлежности, которыми должен быть укомплектован автомобиль</button></b></p></div></li>
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Маркировка автомобиля</button></b></p></div></li>
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Маркировка двигателя</button></b></p></div></li>
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ep']."" ?>' name='name'>Схема пломбирования</button></b></p>
				</div></li>
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
				<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ks']."" ?>' name='name'>Гидрооборудование</button></b></p></div></li>
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
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ключ автомобиля</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочее место водителя</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list4'/>
				<label for='list4'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель приборов</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Комбинация приборов</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контрольные лампы</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Информационный дисплей</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатели на панели приборов</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блоки переключателей</button> </p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двери водителя/ пассажира</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Над ветровым стеклом</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Спальное место</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатель комбинированный</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list5'/>
				<label for='list5'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление наружным освещением</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование угла наклона фар</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Переключатель света</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Свет для движения в дневное время</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Контурные, габаритные фонари</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ближний свет</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Дальний свет</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение указателя поворота</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Фары дополнительного освещения в условиях недостаточной видимости и задние противотуманные фонари</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение предупредительного светового сигнала</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Прожектор освещения сцепного устройства</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Фонари автопоезда</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Проблесковые маяки</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Звуковой сигнал</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стеклоомыватель</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стеклоочистители</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list6'/>
				<label for='list6'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Двери кабины</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка замков дверей</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Опускание и подъем боковых стекол водителя/ пассажира</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list7'/>
				<label for='list7'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вентиляционный люк на крыше</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Открывание/ закрывание вентиляционного люка с помощью переключателей</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Механическое закрывание вентиляционного люка</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Защитная шторка люка</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list8'/>
				<label for='list8'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Наружные зеркала заднего вида</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулировка положения наружных зеркал заднего вида</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Обогрев зеркал</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list9'/>
				<label for='list9'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование сидений</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование сидений на пневмоподвеске</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование сиденья пассажира без пневмоподвески</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Ремни безопасности</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Верхнее спальное место</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Нижнее спальное место</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование положения рулевого колеса</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list10'/>
				<label for='list10'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление системой кондиционирования воздуха</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вентиляционные дефлекторы</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Панель управления системой кондиционирования воздуха</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режим свежего воздуха</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режим рециркуляции воздуха</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение вентиляции в кабине</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Включение отопления в кабине</button> </p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Оттаивание ветрового стекла</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Кондиционер</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автономный отопитель кабины</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Внутреннее освещение кабины</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электророзетки</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Прикуриватель</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Преобразователь напряжения</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вывод для питания радиостанции</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пепельница</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тахограф цифровой</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вещевые отсеки и ящики</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вывод для питания радиоприемника</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list11'/>
				<label for='list11'>
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
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Требования безопасности при эксплуатации автомобиля</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация нового автомобиля (обкатка)</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Основные правила эксплуатации</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list12'/>
				<label for='list12'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Особенности движения автомобиля на подъемах и спусках</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автомобиль с механической коробкой передач</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Автомобиль с коробкой передач с автоматизированным управлением</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рекомендуемые режимы работы двигателя</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Подготовка автомобиля к движению</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Заправка топливных баков (для отдельных комплектаций при наличии двух топливных баков)</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list13'/>
				<label for='list13'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск и останов двигателя</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Пуск двигателя</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Останов двигателя</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Причины некорректного отключения аккумуляторных батарей</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Регулирование частоты вращения холостого хода</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Режим «Круиз-контроль»</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление коробкой передач</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Коробка передач с автоматизированным управлением</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Блокировка межколесного дифференциала</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list14'/>
				<label for='list14'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Тормозная система</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Рабочая тормозная система</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Запасная тормозная система</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Стояночная тормозная система</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Вспомогательная тормозная система</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электронная тормозная система EBS</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Управление рабочей и вспомогательной тормозными системами с помощью тормозной педали</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Антиблокировочная система тормозов</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противобуксовочная система</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Система курсовой устойчивости</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противооткатное устройство</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Электронная система управления пневмоподвеской</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Противооткатный упор</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Облицовочная панель</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Буксирование автомобиля</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list15'/>
				<label for='list15'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Эксплуатация седельного автомобиля-тягача в составе автопоезда</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Трехкомпонентные крылья задней тележки</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Сцепка/ расцепка тягача с полуприцепом</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ea']."" ?>' name='name'>Перекачка нефтепродуктов при эксплуатации гидрофицированного седельного автомобиля тягача с полуприцепом-цистерной</button></p></div></li>
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
		<input type='checkbox' name='chacor' id='list16'/>
		<label for='list16'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'> ЭКСПЛУАТАЦИЯ АВТОМОБИЛЯ В ХОЛОДНЫЙ ПЕРИОД ВРЕМЕНИ</button></b></p></label>
		<div class='acor-body'>
		<ul>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Особенности эксплуатации автомобиля в холодный период времени</button></b></p></div></li>
		<li>
		<div class='btn'  name='name'>
			<input type='checkbox' name='chacor' id='list17'/>
			<label for='list17'>
			<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя в холодный период</button></b></p>
			</label>
			<div class='acor-body'>
			<ul>
			<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Пуск двигателя с применением ЭФУ</button></p></div></li>
			<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Предпусковой подогреватель</button></p></div></li>
			</ul>
			</div>
		</div>
		</li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Подогрев топлива</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['eax']."" ?>' name='name'>Подогрев восстановителя оксидов азота</button></b></p></div></li>
		</ul>
		</div>
	</div>
	</li>
	<li>
	<div class='btn'  name='name'>
		<input type='checkbox' name='chacor' id='list18'/>
		<label for='list18'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'> ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ</button></b></p></label>
		<div class='acor-body'>
		<ul>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Ежедневное и еженедельное техническое обслуживание автомобиля</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при ежедневном техническом обслуживании (ЕТО)</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Перечень работ при еженедельном техническом обслуживании (НТО)</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за автомобилем</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Уход за ветровым стеклом</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка состояния и герметичности приборов и трубопроводов систем автомобиля</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка наличия конденсата в ресиверах</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Обслуживание шин</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в картере двигателя</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня охлаждающей жидкости</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в бачке насоса гидроусилителя рулевого управления</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня жидкости в бачке главного цилиндра привода сцепления</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня масла в гидросистеме автомобиля (для гидрофицированного седельного тягача)</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Фильтр грубой очистки топлива</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Система нейтрализации отработавших газов</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Проверка уровня топлива в автономном бачке предпускового подогревателя</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Аккумуляторные батареи</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Рекомендации по проверке крепления деталей рулевого механизма</button></b></p></div></li>
		<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['tho']."" ?>' name='name'>Рекомендации по проверке ремня привода компрессора системы кондиционирования</button></b></p></div></li>
		</ul>
		</div>
	</div>
	</li>
	<li>
	<div class='btn'  name='name'>
		<input type='checkbox' name='chacor' id='list19'/>
		<label for='list19'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'> ВОЗМОЖНЫЕ НЕИСПРАВНОСТИ АГРЕГАТОВ И СИСТЕМ АВТОМОБИЛЯСАМОПОМОЩЬ</button></b></p></label>
		<div class='acor-body'>
		<ul>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Диагностика и устранение неисправностей</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Последовательность чтения диагностических кодов</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Технологический режим диагностики</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация и устранение неисправностей</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Индикация неисправностей осветительных приборов</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Включение аварийной сигнализации</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Аварийное выключение аккумуляторной батареи</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Аварийный выключатель аккумуляторной батареи NOT - AUS для автомобиля, предназначенного для перевозки опасных грузов</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Износ тормозных накладок</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list20'/>
				<label for='list20'>
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
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена воздушного фильтра топливного бака</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена воздушного фильтра системы питания воздухом</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Растормаживание стояночной тормозной системы при аварийных ситуациях</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от внешнего источника электрической энергии</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Пуск двигателя от аккумуляторной батареи другого автомобиля</button></b></p></div></li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list21'/>
				<label for='list21'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Предохранители и реле</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Расположение предохранителей и реле</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Проверка и замена предохранителей</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li>
			<div class='btn'  name='name'>
				<input type='checkbox' name='chacor' id='list22'/>
				<label for='list22'>
				<p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></b></p>
				</label>
				<div class='acor-body'>
				<ul>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Требования безопасности</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Замена ламп</button></p></div></li>
				<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Таблица применяемой в автомобиле светотехники</button></p></div></li>
				</ul>
				</div>
			</div>
			</li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Возможные неисправности электрооборудования и способы их устранения</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Опрокидывание и опускание кабины</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Автомобильный домкрат</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Установка запасного колеса</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Снятие, установка колес на автомобиль</button></b></p></div></li>
			<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['vn']."" ?>' name='name'>Демонтаж, монтаж бескамерной шины</button></b></p></div></li>

		</ul>
		</div>
	</div>
	</li>
	<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['xa']."" ?>' name='name'> ХРАНЕНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
	<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ta']."" ?>' name='name'> ТРАНСПОРТИРОВАНИЕ АВТОМОБИЛЯ</button></b></p></div></li>
	<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['ga']."" ?>' name='name'> ГАРАНТИИ ПРЕДПРИЯТИЯ-ИЗГОТОВИТЕЛЯ И ПОРЯДОК ПРЕДЪЯВЛЕНИЯ РЕКЛАМАЦИЙ</button></b></p></div></li>
	<li><div class='btn'  name='name'><p><b><button value='<?php echo "".$rw1['idere'].'/'.$rw1['yt']."" ?>' name='name'>УТИЛИЗАЦИЯ</button></b></p></div></li>
</ul>
</div>
<input type='checkbox' name='chacor' id='chacor2' />
<label for='chacor2'><p><b>ПРИЛОЖЕНИЯ</b></p></label>
<div class='acor-body'>
<ul class='countlist'>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril1']."" ?>' name='name'>Приложение Б Химмотологическая карта автомобиля КАМАЗ-5490</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril2']."" ?>' name='name'>Приложение В Эксплуатационные материалы</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril3']."" ?>' name='name'>Приложение (копия) Подогреватель предпусковой дизельный 14ТС-10-GP</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril4']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации Автономный прибор для обогрева и поддержания температуры воздуха в кабине AIRTRONIC D2</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril5']."" ?>' name='name'>Приложение (копия) Инструкция по эксплуатации автономного отопителя ф Webasto</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril6']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации Грузовые автомобили ZF-NewEcosplit</button></p></div></li>
<li><div class='btn'  name='name'><p><button value='<?php echo "".$rw1['idere'].'/'.$rw1['pril7']."" ?>' name='name'>Приложение (копия) Руководство по эксплуатации ZF-INTARDER Встроенный тормоз-замедлитель (интардер)  для грузовых автомобилей и автобусов с коробкой передач ZF</button></p></div></li>
</ul>
</div>