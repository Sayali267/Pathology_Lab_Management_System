
$(document).ready(function(){

	$('.card-body>h4>a').on('click',function(event){
		event.preventDefault();
		
		$this = $(this);
		
		//getDate = $this.html().replace(" ","+");
		
		$.getJSON($this.attr('href'),{product:$this.html()},function(json){
			console.log(json);
		})
	})

	
});

