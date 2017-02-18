$(document).ready(function(){
            $.ajax({
                url: "getdata.php",
                type: "post",
                dataType: "json",
                async: false,
                data: {action:"chart"} ,
                success: function (data)
                {
                    var department=[];
                    var salary=[];
                    
                    for(var i in data)
                    {
                        department.push(data[i].dept_name);
                        salary.push(data[i].total);
                    }
                    
                    
                    var chartdata={
                        labels:department,
                        datasets:[
                            {
                                label: 'Department salary',
                                backgroundColor:'rgba(2,31,78,0.75)',
                                borderColor:'rgba(2,31,78,0.75)',
                                hoverBackgroundColor:'rgba(2,31,78,1)',
                                hoverBorderColor:'rgba(2,31,78,1)',
                                data:salary
                            }
                        ]
                    };
                    
                    
                    var ctx=$('#mycanvas');
                    
                    var bargraph= new Chart(ctx,{
                        type:'bar',
                        data:chartdata
                    })
                }
            });
    
});