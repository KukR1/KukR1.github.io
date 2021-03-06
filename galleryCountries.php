<div id="countries-wrapper" class="content-section">
    <section style="">
        <div class="countries-container " style="position:relative;">
            <div class="country-box" style="">
                <div class="innerbox greece">
                    <?php include($path . "img/countries/greece.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Greece</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox germany">
                    <?php include($path . "img/countries/germany.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Germany</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">

                <div class="innerbox italy">
                    <?php include($path . "img/countries/italy.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Italy</h3>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="country-box" style="">
                <div class="innerbox denmark">
                    <?php include($path . "img/countries/denmark.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Denmark</h3>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="country-box" style="">
                <div class="innerbox portugal">
                    <?php include($path . "img/countries/portugal.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Portugal</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox switzerland">
                    <?php include($path . "img/countries/switzerland.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Switzerland</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox netherlands">
                    <?php include($path . "img/countries/netherlands.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Netherlands</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox australia">
                    <?php include($path . "img/countries/australia.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Australia</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox france">
                    <?php include($path . "img/countries/france.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>France</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox usa">
                    <?php include($path . "img/countries/usa.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>USA</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox sweden">
                    <?php include($path . "img/countries/sweden.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Sweden</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox slovenia">
                    <?php include($path . "img/countries/slovenia.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Slovenia</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box " style="">
                <div class="innerbox  uk">
                    <?php include($path . "img/countries/uk.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>United <br class="uk-mobile" /> Kingdom</h3>
                        <span></span>

                    </div><!-- h3-spancontainer -->
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox kuwait">
                    <?php include($path . "img/countries/kuwait.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Kuwait</h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="country-box" style="">
                <div class="innerbox saudi_arabia">
                    <?php include($path . "img/countries/saudi_arabia.svg") ?>
                    <div class="h3-spancontainer ">
                        <h3>Saudi Arabia</h3>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="country-box">
                <div class="innerbox see-all">
                    <div style="width:35px;height:35px;float:left"></div>
                    <a href="#seeall" style="color: #da1a35;">
                        <div class="h3-spancontainer ">

                            <h3>See All</h3>
                            <span></span>

                        </div>
                    </a>
                    <!-- <div class="btn-all" style="margin-left: 45px;">
                        <a href="#seeall"> See all <span> ></span> </a>
                    </div> -->
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
        $(".sweden").on("click", function() {
            $('#pageContent').load("/pages/sweden.html");
            $(".h3-spancontainer span").text(">");
        });
        $(".slovenia").on("click", function() {
            $('#pageContent').load("/pages/slovenia.html");
            $(".h3-spancontainer span").text(">");
        });
        $(".usa").on("click", function() {
            $('#pageContent').load("/pages/usa.html");
            $(".h3-spancontainer span").text(">");
        });
        $(".see-all a").on("click", function(event) {
            event.preventDefault();

            $('#countries-wrapper').load("/pages/all.php");
        });

    });
</script>