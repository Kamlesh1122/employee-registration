$(document).ready(function(){
    
       
       $('input:radio[name="gender"][value="Male"]').prop('checked', true);
       
    $('#regsub').click(function(){
       
     
        if(validation())
        {
            var gender=$('input[name=optradio]:checked').val();
             $.ajax({
                url: "getdata.php",
                type: "post",
                async: false,
                data: "empname=" + $('#empname').val() +
                        "&gender=" + gender +
                        "&deptdrp=" + $('#deptdrp').val() +
                        "&salary=" + $('#salary').val() +
                        "&address=" + $('#address').val() +
                        "&deptcity=" + $('#deptcity').val()+"&action=registration" ,
                success: function (data)
                {
                    alert(data);
                    location.reload();
                }
            });
        }
        
    });
   
    $("#salary").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
    $("#deptstate").change(function() {
        $('#deptcity').val("");
        var stateclassname=$('#deptstate').find('option:selected')[0].className;
        
        $('#deptcity option').each(function(){ 

            if(stateclassname==$(this)[0].className )
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

function validation()
{
    var isvalid=true;
    if($('#empname').val()=="")
    {
        $('#empname').closest('.form-group').removeClass('has-success').addClass('has-error');
        isvalid=false;
    }
    else
    {
        $('#empname').closest('.form-group').addClass('has-success').removeClass('has-error');
    }
    
    if($('#deptdrp').val()=="")
    {
        $('#deptdrp').closest('.form-group').removeClass('has-success').addClass('has-error');
        isvalid=false;
    }
    else
    {
        $('#deptdrp').closest('.form-group').addClass('has-success').removeClass('has-error');
    }
    
    if($('#salary').val()=="")
    {
        $('#salary').closest('.form-group').removeClass('has-success').addClass('has-error');
        isvalid=false;
    }
    else
    {
        $('#salary').closest('.form-group').addClass('has-success').removeClass('has-error');
    }
    
    if($('#address').val()=="")
    {
        $('#address').closest('.form-group').removeClass('has-success').addClass('has-error');
        isvalid=false;
    }
    else
    {
        $('#address').closest('.form-group').addClass('has-success').removeClass('has-error');
    }
    
    if($('#deptcity').val()=="")
    {
        $('#deptcity').closest('.form-group').removeClass('has-success').addClass('has-error');
        isvalid=false;
    }
    else
    {
        $('#deptcity').closest('.form-group').addClass('has-success').removeClass('has-error');
    }
    if($('#deptstate').val()=="")
    {
        $('#deptstate').closest('.form-group').removeClass('has-success').addClass('has-error');
        isvalid=false;
    }
    else
    {
        $('#deptstate').closest('.form-group').addClass('has-success').removeClass('has-error');
    }
    
    return isvalid;
}