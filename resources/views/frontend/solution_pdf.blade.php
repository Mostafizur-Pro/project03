<html>
    <head>
        
        <title>{{$solutionpdf->so_title}}</title>
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
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 3.5cm;
            }
            
            p{
            font-size: 12px
            }
            h3{
               
               margin-bottom:-2px; 
                color: rgba(5, 155, 27, 0.73) ;
            }
            
            .img-left{
                margin-left:18px;
            float: left;
            }
            
            .img-right{
                margin-right:18px;
                float: right;
            }
            img{
                width:160px;
                height:60px;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: .2cm;
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
                position: fixed; 
                bottom: 1.70cm; 
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
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <div class="img-left">
        <img src="{{asset('public/baits.png')}}" alt="" >
    </div>
    <div class="img-right">
        <img src="{{asset('public/tech.png')}}" alt="">
    </div>
        </header>
        
       
        
        

        <footer>
             <h3>BANGLADESH ASSOCIATE OF IT SOLUTION</h3>
            <p class="contact"> <strong>USA Office:</strong>745 2nd Avenue 40 Street NY-10016 ,<strong>Corporate Office:</strong> 2A/12 Pallabi, Dhaka – 1216. <br> <strong>Factory:</strong> Section # 1/C, Road # 3, House#12, Kalwalpara, Mirpur-1, Dhaka - 1216 Bangladesh. <br>
                <strong>Web:</strong> www.baitsbd.com ; techzonebdltd.com
                <strong>Email:</strong> info@baitsbd.com, info.baits@gmail.com
            </p>
            
            <hr class="baits">
            <hr class="tech">
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
             
            <center> <h3>{{$solutionpdf->so_title}}</h3> </center>
            <br>
            <center> <img src="{{asset($solutionpdf->so_image)}}" style="width: 400px;height: 200px; margin-bottom: 15px;" /></center>
            <br>
            <div class="clearfix"></div>
            <p >{!! $solutionpdf->so_discription!!}</p>

        </main>
    </body>
</html>
