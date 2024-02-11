<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>{{$productpdf->p_name}}</title>
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 2.5cm;
                margin-right: 2cm;
                margin-bottom: 2.5cm;
            }
            
            p{
            font-size: 12px
            }
            h3{
               
               margin-bottom:-2px; 
                color: rgba(5, 155, 27, 0.73) ;
            }
            
            .img-left{
                margin-left:55px;
                float: left;
            }
            
            .img-right{
                margin-right:-10px;
                float: right;
            }
            
            
            .braim{
                margin-left:100px;
                margin-top:20px;
                float:left;
                
            }
            
            .pro{
                margin-right:50px;
                float:right;
                margin-top:-100px;
                
            }

            /** Define the header rules **/
            header {
                position: absolute;
                top: -2.2cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }

            /** Define the footer rules **/
            footer {
               position: absolute;
                bottom: 1cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                
                text-align: center;
                
            }
            .baits{
                background-color: rgba(5, 155, 27, 0.73);
                padding: 2.5px;
                border:0;
                }
                
            .tech{
                background-color: rgba(12, 37, 155, 0.73);
                padding: 2.5px;
                border:0px;
            }
            
            hr{
            margin: 0;
        }
        </style>
    </head>
    
    <body oncopy="return false" oncut="return false" onpaste="return false">
        <!-- Define header and footer blocks before your content -->
        <header oncopy="return false" oncut="return false" onpaste="return false">
            <div class="img-left">
        <img src="{{asset('public/baits.png')}}" alt="" style="width:160px;">
    </div>
    <div class="img-right">
        <img src="{{asset('public/tech.png')}}" alt="" style="width:160px;">
    </div>
        </header>
        
       

        <!-- Wrap the content of your PDF inside a main tag -->
        <main oncopy="return false" oncut="return false" onpaste="return false">
             
            <!--<center> <h3 style="margin-left:90px;">{{$productpdf->p_name}}</h3> </center>-->
            <!--<br><div class="clearfix"></div>-->
            
                    
                      <center> <img src="{{asset($productpdf->brand_logo)}}" style="margin-left:40px;width: 600px;height: 200px; margin-top:-20px; margin-bottom:0px; " /></center>
                     
                    
            
            
            
            <div style="padding-left:25px; margin:0 auto;">
                <p oncopy="return false" oncut="return false" onpaste="return false" >{!! $productpdf->p_features!!}</p> 
            </div>
            <div class="clearfix"></div>

        </main>
         <footer oncopy="return false" oncut="return false" onpaste="return false">
            
            <center><img src="{{asset('public/fo-main-1.png')}}" style="height:100px; margin-left:20px; width:700px; marghin-top:5px;" /></center>
             
            
        </footer>
        
       
    </body>
</html>
