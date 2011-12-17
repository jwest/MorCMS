$(document).ready(function() {

    var sortable;
    var option;
    
    $.datepicker.setDefaults($.datepicker.regional['pl']);

    var fixHelper = function(e, ui) {
        ui.children().each(function() {
            $(this).width($(this).width());
        });
        return ui;
    };
				
    $("table.tpl tbody tr:odd").addClass("tpl-bg1");
    $("table.tpl tbody tr:even").addClass("tpl-bg2");
    $("#filters").click(function() {$(".filters").toggle();});   
    $("#row1").click(function() {$("#row1h").toggle();});
    $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
      
    $('.selectable tbody tr').click(function(){
        $(this).attr('data-select','true');
        $(this).find('td').toggleClass('selected');
    });  
      
    $(".sortable tbody").sortable({
        items: "tr",
        axis: 'y',
        helper: fixHelper,
        update: function()
        {
            $("table.tpl tbody tr").removeClass("tpl-bg1");
            $("table.tpl tbody tr").removeClass("tpl-bg2");
            $("table.tpl tbody tr:odd").addClass("tpl-bg1");
            $("table.tpl tbody tr:even").addClass("tpl-bg2");

            sortable = $(this).sortable('serialize');
        }
    }).disableSelection();
   
   $('#filter').click(function(){       
       $(this).toggleClass('active');
       $('.tpl thead tr.filter').toggle();
   });
   
   $('#search').click(function(){       
       
       var param = '';
       
       $('input').each(function(){
           if($(this).val() != ''){
               if($(this).hasClass('datepicker')){
                   param = param + $(this).attr('name') + ':' + Math.round(new Date($(this).attr('value')).getTime() / 1000) + '&';
               }else{
                   param = param + $(this).attr('name') + ':' + $(this).attr('value') + '&';
               }                
           }
       });   
       
       $('select').each(function(){
           if($(this).find('option:selected').val != ''){
                param = param + $(this).attr('name') + ':' + $(this).find('option:selected').val() + '&';
           }       
       });
       
       param = param.substring(0, param.length-1);
       
       window.location.href = URL + 'admin/' + CONTROLLER + '/show/' + param;
   });
   
   $('#crud_exec').click(function(){
       
       option = $('#crud_options').val();
       
       switch(option){
           
           case 'delete':
               confirm('test');
               break;
               
           case 'sort':           
               $.ajax({
                    type: "POST",
                    data: sortable,
                    url: URL + 'admin/' + CONTROLLER + '/sort',

                    success: function(data){
                        $('#messages').append(data);
                    }
                });               
                break;
       }
       
   });
   
});