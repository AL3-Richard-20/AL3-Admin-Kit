// ===================== AJAX Call ======================



    // ==================== Retrieve Data ===================
        $.ajax({

            url:"exec/action.php",      //Action Page
            method:"POST",              //POST or GET
            dataType:"JSON",            //JSON (For displaying)
            data:{
                data1:data1,            //IDs
                action:"action_name"    //Action to be executed
            },
            success:function(data){

                //Distribute values
            }
        })
    // ==================== Retrieve Data END ===================
    


    // ==================== Create, Update, Delete Data ===================
        $.ajax({

            url:"exec/action.php",      //Action Page
            method:"POST",              //POST or GET
            data:{
                data1:data1,            //Form values/IDs
                action:"action_name"    //Action to be executed
            },
            success:function(data){

                var result = JSON.parse(data)   //The CUD values are : 1=success, 2=error, 3=missing_item, 4=extras

                if(result == '1'){

                    // Display toastr/swal
                    //Refresh Datatables
                    //Close Modal
                    //Any action you want
                }

                else if(result == '2'){

                    // Display Error Message
                }

                else if(result == '3'){

                    // Display Item has been missing
                }

                else if(result == '4'){

                    // Additional Messages
                }
            }
        })
    // ==================== Create, Update, Delete Data END ===================



// ===================== AJAX Call END ======================
