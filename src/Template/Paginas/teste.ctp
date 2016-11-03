<br/><br/>       
<br/>       
<br/>       
<br/>       
<br/>       
<br/>       
<br/>       
<br/>       
       
<!--Call your modal-->
        <ul>
            <li><a id="demo01" href="#animatedModal">DEMO01</a></li>
            <li><a id="demo02" href="#modal-02">DEMO02</a></li>
            
                        

            
           

        </ul>
      
<a id="demo03" href="#modal-03">DEMO3</a>

      
        <!--DEMO01-->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal"> 
                CLOSE MODAL
            </div>
                
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
            
            
            
        </div>

        <!--DEMO02-->
        <div id="modal-02">
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-modal-02"> 
                CLOSE MODAL
            </div>
            
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>
        
             <!--DEMO03-->
        <div id="modal-03">
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-modal-03"> 
                CLOSE MODAL
            </div>
            
            <div class="modal-content">
                Modal 03
                <!--Your modal content goes here-->
            </div>
        </div>
        
        
        
  
        
        
        <script>

            //demo 01
            $("#demo01").animatedModal();
            


            //demo 02
            $("#demo02").animatedModal({
                modalTarget:'modal-02',
                animatedIn:'lightSpeedIn',
                animatedOut:'bounceOutDown',
                color:'#3498db',
                // Callbacks 
                beforeOpen: function() {
                    console.log("The animation was called");
                },           
                afterOpen: function() {
                    console.log("The animation is completed");
                }, 
                beforeClose: function() {
                    console.log("The animation was called");
                }, 
                afterClose: function() {
                    console.log("The animation is completed");
                }
            });
            
            
            //demo 03
            $("#demo03").animatedModal({ modalTarget:'modal-03'});
            

        </script>
