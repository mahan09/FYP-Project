function validateText(id)
        {
            if($("#"+id).val()==null || $("#"+id).val()=="")
            {
                
               var div = $("#"+id).closest("div");
                div.removeClass("has-success");
                $("#glypcn"+id).remove();
               div.addClass("has-error has-feedback");
                div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
                return false;
            }
            
            else
            
            
            {
                var div = $("#"+id).closest("div");
               div.removeClass("has-error");
                div.addClass("has-success has-feedback");
                $("#glypcn"+id).remove();
               div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
                return true;
            }
            
            
        }
        
        
        $(document).ready(
            
            
        
        function()
        {
            
            $("#registration").click(function()
                                     
              {
                
                if(!validateText("Fullname"))
                {
                    return false;
                    
                }
                
                   if(!validateText("Password"))
                {
                 return false;
                }
                
                
            
                
                $("form$#registration").submit();
                
             });
            
        }
        
        );