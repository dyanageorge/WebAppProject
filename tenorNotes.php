<?php   
    include 'template.php';// to include the template on the index page
?>

    <!--create a content div-->
    <div class="content" 
         style="margin: 15%">
        <div id="row" 
             style="border: solid; border-color: white; margin:0%">
        <!-- make a table for the animation -->
            <div id="col1" 
                 style="border: solid; border-color: white; width: 35%; padding-top:10%; float: left">
                <!--prompt the image-->
                <image src="images/tenorPan.png">
                <!--map area
                <map name="#tenorMap">
                   
                    <area shape="poly"
                          alt="outer C Sharp" 
                          title="one" 
                          href="#note1" 
                          coords="73,54,91,82,122,59,107,27" />
                    
                    <area shape="circle"
                          alt="Outer G Sharp" 
                          title="two" 
                          href="#" 
                          coords="50,66,73,94,57,132,26,106" />
                    
                    <area alt="Outer E Flat" 
                          title="" 
                          href="#" 
                          shape="circle" 
                          coords="16,126,54,144,58,188,19,191" />
                    
                    <area alt="Outer B FLat" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="54,198,21,206,45,250,72,233" />
                    
                    <area alt="Outer F" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="57,262,80,242,125,267,111,301" />
                    
                    <area alt="Outer C" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="121,302,131,273,181,264,202,296" />
                    
                    <area alt="Outer G" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="200,268,211,301,237,242,267,262,217,248,231,245,215,249" />
                    
                    <area alt="Outer D" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="269,255,244,231,262,190,305,193" />
                    
                    <area alt="Outer A" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="307,180,267,177,262,138,297,125" />
                    
                    <area alt="Outer E" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="295,110,255,121,235,93,254,58" />
                    
                    <area alt="Outer B" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="249,55,208,23,190,54,225,79" />
                    
                    <area alt="Outer F Sharp" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="193,28,136,16,137,52,178,59" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="151,73,172,78,170,101,152,102" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="127,87,107,108,121,125,141,115" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="89,112,74,126,95,138,103,124" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="75,155,98,154,100,176,75,178" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="77,192,95,194,98,213,78,216" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="108,212,130,217,129,236,101,235" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="184,225,208,219,218,233,199,245" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="203,201,214,176,239,190,229,210" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="222,150,229,172,248,168,243,147" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="214,139,199,124,221,104,236,127" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="200,106,181,98,191,81,208,88" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="143,131,131,141,141,155,156,149" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="118,173,134,171,134,189,120,187" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="149,176,168,174,171,195,151,202" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="179,156,179,167,199,169,198,156" />
                    
                    <area alt="" 
                          title="" 
                          href="#" 
                          shape="poly" 
                          coords="184,128,170,121,166,138,182,138" />
                </map>
                <!--the modal-->
                <div id="myModal" class="modal">
                    
                    <!-- Modal Content (The Image) -->
                    <div class="modal-content" >
                        <span class="close">&times;</span>
                    
                        <video controls="controls">
                            <source src="videos/C6.mp4" type="video/mp4">
                            <source src="tracks/CSharp4.mp3" type="audio/mp3">
                        </video>
                        
                    </div>
                    <!--javascript for modal-->
                    <script>
                        //call the area
                        $(document).ready(function(){
                            $("#myBtn").click(function(){
                                $("#myModal").modal();
                            });
                        });
                    </script>
                </div>
            </div>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" onclick="note(2)">A#</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(3)">B</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(4)">B#</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(5)">C</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(6)">C#</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(7)">D</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(8)">D#</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(9)">E</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(10)">E#</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(11)">F</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(12)">F#</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(13)">G</button><br>
            <button type="button" class="btn btn-info btn-xs" onclick="note(14)">G#</button>
        </div>
    </div>

    </body>
</html>