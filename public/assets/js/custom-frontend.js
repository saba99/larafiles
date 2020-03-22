jQuery(document).ready(function(){



    $(document).on('click','.btn_report_file',function(event){

     
    event.preventDefault();

    var $this=$(this);
   var file_id=$this.data('fid');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $.ajax({


        url:'/file/report',
        type:'post',
        dataType:'json',
        data:{
          
            file_id:file_id

        },
        success:function(response){

          if(response.success){

            //alert(response.message)
              swal({
                  
                  title: "",
                  text: response.message,
                  icon: "success",
                

              });
          }
          else{

              swal({

                  title: "",
                  text: response.message,
                  icon: "error",


              });
          }

        },
        error:function(){


        }
    })


    });


});