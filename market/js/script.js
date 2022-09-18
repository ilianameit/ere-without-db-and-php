
			// Когда пользователь прокручивает страницу, выполните myFunction
			window.onscroll = function() {myFunction()};

			// Получить заголовок
			var header = document.querySelector("body>header");

			// Получить смещение позиции навигационной панели
			var sticky = header.offsetTop;

			// Добавить класс "sticky" к заголовку, когда вы достигнете его позиции прокрутке.
			// Удалить "sticky" при выходе из положения прокрутки
			function myFunction() {
			  if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			  } else {
				header.classList.remove("sticky");
			  }
			}
		


		

		
		
		
		
	
var display = document.querySelectorAll('.display li ');
var active='active';
display.forEach(c => {
  c.addEventListener('click', () => {
    display.forEach(s => s.classList.remove(active));
    c.classList.add(active);


var win = document.getElementById('window');
var line = document.getElementById('line');
var item = document.querySelectorAll('.items ');
if (win.classList.contains('active')) {

	item.forEach(it => { 
		it.classList.add('win');
	})
} else{
	item.forEach(its => { 
		its.classList.remove('win');
	})
}

if (line.classList.contains('active')) {

	item.forEach(it => { 
		it.classList.add('line');
	})
} else{
	item.forEach(its => { 
		its.classList.remove('line');
	})
}

  })
})
	