 //alert("testmap");
             var data = {
               'action':'ajax_get_post_information',
               'post_id':20
             }
             $.post(ajaxurl,data,function(response){
               alert('sever reponse from  the ajax url'+response);
             });
            });
            });