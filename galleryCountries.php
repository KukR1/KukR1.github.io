<div id="countries-wrapper" class="content-section">
    <section style="">
        <div class="countries-container " style="">
            <div class="country-box" style="">
                <div class="innerbox greece">
                    <?php include("img/countries/greece.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Greece</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox germany">
                    <?php include("img/countries/germany.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Germany</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">

                <div class="innerbox italy">
                    <?php include("img/countries/italy.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Italy</h3>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="country-box" style="">
                <div class="innerbox denmark">
                    <?php include("img/countries/denmark.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Denmark</h3>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="country-box" style="">
                <div class="innerbox portugal">
                    <?php include("img/countries/portugal.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Portugal</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox switzerland">
                    <?php include("img/countries/switzerland.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Switzerland</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox netherlands">
                    <?php include("img/countries/netherlands.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Netherlands</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox australia">
                    <?php include("img/countries/australia.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Australia</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox france">
                    <?php include("img/countries/france.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>France</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box " style="">
                <div class="innerbox  uk">
                    <?php include("img/countries/uk.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>United <br class="uk-mobile" /> Kingdom</h3>
                        <span></span>

                    </div><!-- h3-spancontainer -->

                </div>

                <div style="position: relative; width: 0; height: 0">
                    <div class="ukafter btn-all" style="">

                        <a href="#seeall"> See all <span> ></span> </a>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox kuwait">
                    <?php include("img/countries/kuwait.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Kuwait</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox saudi_arabia">
                    <?php include("img/countries/saudi_arabia.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Saudi Arabia</h3>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="padding-bottom:80px;">
        <div class="countries-info" id="pageContent">


        </div>
    </section>
</div>


<script src="/js/jquery.min.js"></script>

<script>
      $(document).ready(function() {
         $(".h3-spancontainer span").text(">");
      });
   </script>
   <script>
      $(document).ready(function() {

         $(".greece").on("click", function() {
            $('#pageContent').load("/pages/greece.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".germany").on("click", function() {
            $('#pageContent').load("/pages/germany.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".saudi_arabia").on("click", function() {
            $('#pageContent').load("/pages/saudi_arabia.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".italy").on("click", function() {
            $('#pageContent').load("/pages/italy.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".denmark").on("click", function() {
            $('#pageContent').load("/pages/denmark.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".portugal").on("click", function() {
            $('#pageContent').load("/pages/portugal.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".switzerland").on("click", function() {
            $('#pageContent').load("/pages/switzerland.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".netherlands").on("click", function() {
            $('#pageContent').load("/pages/netherlands.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".australia").on("click", function() {
            $('#pageContent').load("/pages/australia.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".france").on("click", function() {
            $('#pageContent').load("/pages/france.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".kuwait").on("click", function() {
            $('#pageContent').load("/pages/kuwait.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".poland").on("click", function() {
            $('#pageContent').load("/pages/poland.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".uk").on("click", function() {
            $('#pageContent').load("/pages/uk.html");
            $(".h3-spancontainer span").text(">");
         });
         $(".ukafter a").on("click", function(event) {
            event.preventDefault();

            $('#countries-wrapper').load("/pages/all.php");



         });


      });
   </script>

