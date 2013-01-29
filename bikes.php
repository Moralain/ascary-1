<div id="content">
    <ul id="bikes">
        <li class="bikeMenu">                  	    
            <img src="images/bike01.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike01.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike01.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike01.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike04.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike04.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>  
        <li class="bikeMenu">                  	    
            <img src="images/bike04.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike04.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>  
        <li class="bikeMenu">                  	    
            <img src="images/bike02.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike02.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike02.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike02.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike03.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike03.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li> 
        <li class="bikeMenu">                  	    
            <img src="images/bike03.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li>
        <li class="bikeMenu">                  	    
            <img src="images/bike03.jpg" />
            <h3>FISTROPECADORA BIKE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; REF: 0001</h3>
            <div class="textoh">
                <a href="#">See details</a>
            </div><!--texto-->
        </li> 
    </ul>
    <div id="pagButtons" style="position:absolute; top:250px">
        <a class="next" href ="#">Next</a>
        <a class="prev" href ="#" style="display:none">Previous </a>
    </div>

    <script type="text/javascript">
        $(document).ready (function () {
            var currentPage = 0;
            var perPage = 4;
            var totalPages = Math.ceil($('.bikeMenu').length / perPage) - 1;
            function paginate (page) {
                currentPage = page;
                $('.bikeMenu').hide();
                
                var firstElem = page * perPage;
                var lastElem = firstElem + perPage;
                
                for (var i = firstElem; i < lastElem; i++) {
                    $('.bikeMenu').eq(i).fadeIn('slow');
                }
                
                if (currentPage == totalPages) {
                    $('.next').hide();
                } else if (currentPage == 0) {
                    $('.prev').hide();
                } else {
                    $('.prev').show();
                    $('.next').show();
                }
            }
            
            $(".next").click (function () { 
                debugger;
                if (currentPage < totalPages) {
                    paginate (currentPage + 1);             
                }
            });
            
            $(".prev").click (function () { 
                if (currentPage > 0) {
                    paginate (currentPage - 1);             
                }
            });
                        
            paginate (0);
        });

    </script>
</div>