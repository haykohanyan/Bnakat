$(document).ready(function(){
		var delivery_arr = [];

		$('.spin .minus_button').click(function(){
			let i     = $(this).attr('data-which');
		    let price = Number($('#product'+i+' .price').html());
		    let name = Number($('#product'+i+' .name').html());
		    let first_count = Number($('#product'+i+' .count_spin').attr('data-count'));
		    let count       = Number($('#product'+i+' .count_spin').val());
	
		    if(count == first_count){
		    	let total = price*count;
		    	$('#product'+i+' .count_spin').val(count);
		    	$('#product'+i+' .total .value').html(total);
		    	$('#product'+i+' .total_input').val(total);
		    }
		    else {
		    	if(first_count == 2){
				  count -= 1;
			   }
				else{
			      count -= first_count;	
				}
		    	
		    let total = price*count;
		    $('#product'+i+' .count_spin').val(count);
		    $('#product'+i+' .total .value').html(total);
		    $('#product'+i+' .total_input').val(total);
		    }

		 
		    
	});

	   $('.spin .plus_button').click(function(){

			let i     = $(this).attr('data-which');
		    let price = Number($('#product'+i+' .price').html());
		    let first_count = Number($('#product'+i+' .count_spin').attr('data-count'));
		    let count       = Number($('#product'+i+' .count_spin').val());
	
			if(first_count == 2){
				count += 1;
			}
			else{
		      count += first_count;	
			}
		    let total = price*count;
		    $('#product'+i+' .count_spin').val(count);
		    $('#product'+i+' .total .value').html(total);
		    $('#product'+i+' .total_input').val(total);
		   
		 	
		
	})




	 })
    
	
