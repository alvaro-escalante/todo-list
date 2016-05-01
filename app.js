var list = (function () {
	var items;
	(localStorage.getItem('session') === null) 
	? items = []
	: items = JSON.parse(localStorage.getItem('session'));

	//cache DOM
	var $el = $('#itemModule');
	var $form = $el.find('#myForm');
	var $input = $el.find('input[type=text]');
	var $number = $el.find('input[type=number]');
	var $ul = $el.find('ul');
	var template = $el.find('#item-template').html();

	//bind Events
	$form.on('submit', addItem);
	$ul.on('click', 'span.del', removeItem);
	$el.on('click', 'span.plus', plusItem);
	$ul.on('click', 'button.all', removeAll);
	render();

	function render() {
		$ul.html(Mustache.render(template, {items: items}));
		(items.length > 0) ? $('h3').append() : $('h3').detach();
	}

	function addItem(e) {
		e.preventDefault();
		if($input.val().length > 0 ) {
			items.unshift( $input.val() + " " + $number.val());
			localStorage.setItem("session", JSON.stringify(items));
		}
		render();
		$input.val('');	
		$number.val('');	
	}

	function removeItem(e) {
		var i = $(e.target).closest('li').index();
		items.splice(i, 1);
		localStorage.setItem("session", JSON.stringify(items));
		localStorage.removeItem(i);
		render();
	}

	function plusItem(e) {
		var counter = $('.here').val();
		counter++;
		$(e.target).next('.here').val(counter);
	}

	function removeAll(e) {
		if (confirm("Are you sure?")) {
			while (items.length > 0) {
		    items.splice(0, 1); 
			} 
			render(); 
			localStorage.clear();
		}	else { e.preventDefault(); }
	}

	return {

		addItem: addItem,
		removeItem: removeItem,
		removeAll: removeAll
	}
}());
