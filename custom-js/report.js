$(document).ready(function(){
    $('#example').DataTable();
    
      $('#search').click(function(){
          
          $.ajax({
                url: "getdata.php",
                type: "post",
                async: false,
                data: "empname=" + $('#empname').val() +
                    "&deptcity=" + $('#citydrp').val()+
                    "&state=" + $('#statedrp').val()+
                    "&dept=" + $('#deptdrp').val()+"&action=report",
                success: function (data)
                {
                  if ( $.fn.DataTable.isDataTable('#example') ) {
                    $('#example').DataTable().destroy();
                  }
                  $('#example tbody').empty();
                  $('#tblbody').append(data);
                   
                    $('#example').DataTable();
                }
            });
      });
      
      
      $("#statedrp").change(function() {
        $('#citydrp').val("");
        var stateclassname=$('#statedrp').find('option:selected')[0].className;
        
        $('#citydrp option').each(function(){ 

            if(stateclassname==$(this)[0].className || $(this)[0].value =="")
            {
               $(this).css('display','block');
            }
            else
            {
                $(this).css('display','none');
            }

        });    

    });
});
