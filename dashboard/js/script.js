$(document).ready(function(){

	$('.remove').click(function(){
		let id = $(this).attr('data-row-id');
		let table = $(this).attr('data-table');
         if($('#'+table+id).find('.item-img').attr('data-img')){
            var folder = $('#'+table+id).find('.item-img').attr('data-img').substring(0, 7);
            var image = $('#'+table+id).find('.item-img').attr('data-img').substring(8, $('#'+table+id).find('.item-img').attr('data-img').length);
            console.log(folder);
          }
          else {
            image = "";
            folder = "";
          }
        
		$('.remove-yes').on("click", function(){
			$.ajax({
				 type:"post",
                 url: base_url+'/admin/remove_items',
                 data:{ id:id,
                        table:table,
                        folder:folder,
                        image:image
                    },
                 success:function(){
                 	$('#'+table+id).remove();
                 }
			})
			 
		})

	})
	var url = window.location.pathname; 

    var activePage = url.substring(url.lastIndexOf('/') + 1); 
        $('.menu li a').each(function () {
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); 
 
            if (activePage == linkPage) {
                $(this).parent().addClass('active'); 
            }
        });
})