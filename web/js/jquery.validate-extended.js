jQuery.validator.addMethod(
            "dateEN",
            function(value, element) {
                var check = false;
                var re = /^\d{2}\-\d{2}\-\d{4}$/
                if( re.test(value)){
                    var adata = value.split('-');
                    var gg = parseInt(adata[0],10);
                    var mm = parseInt(adata[1],10);
                    var aaaa = parseInt(adata[2],10);
                    var xdata = new Date(aaaa,mm-1,gg);
                    if ( ( xdata.getFullYear() == aaaa ) && ( xdata.getMonth () == mm - 1 ) && ( xdata.getDate() == gg ) )
                        check = true;
                    else
                        check = false;
                } else
                    check = false;
                return this.optional(element) || check;
            }, 
            "Please enter a correct date"
        );
