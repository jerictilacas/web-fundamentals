<link href="DOM/css/normalize.css" media="all" rel="stylesheet" type="text/css"/>
<link href="DOM/css/font-awesome.css" media="all" rel="stylesheet" type="text/css"/>
<link href="DOM/css/stylesheets.css" media="all" rel="stylesheet" type="text/css"/>

<html>
<body>
<div id="page-inner">
    <div class="row header-fixed" id="header">
        <div class="column-4" >
            <div class="logo">
                <span class="example">mozilla.org</span>
                <button onclick="myFunction()">try me</button>
            </div>
        </div>
        <div class="column-8">
            <form class="search-box" action=""  method="get">
                Search mozilla: <input type="text" name="search" id="search" value="Search"/>
                <input type="submit" name="submit" value="go"/>
            </form>
            <ul class="ul-inline ul-main-menu">
                <li><button class="button" onclick="myfunction()">new list</button></li>
                <li><a id="mainTime" onclick="hiddenFunction()">Products</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Store</a></li>
                <li><a href="">Developers</a></li>
                <li><a href="">About</a></li>
                <li class="li-green li-dropdown li-login">
                    <a href="">Support</a>
                    <ul>
                        <li>sub menu</li>
                    </ul>
                </li>
                <style>
                    .li-dropdown > ul {
                        display: none;
                    }

                    .li-dropdown.open > ul {
                        display: block;
                    }
                </style>
            </ul>
        </div>
    </div>
    <div id="main">
        <div class="row">
            <div id="animate" class="column-3">
                <img class="img-responsive" src="clients/7.png" alt="">
            </div>
                <div class="column-9 row">
                    <div id="firefox" class="column-6">
                        <h1>Firefox & Thunderbird</h1>
                    </div>
                    <div class="column-6 textRight">
                        <form action="" method="post">
                            <br/>
                            email: <input type="text" name="email" value="your mail" id="email"><br/>
                            Password: <input type="password" name="password" value="">
                        </form>
                    </div>
                    <div class="column-12">
                        <p class="margin-zero">
                        Looking for Firefox or Thunderbird? You'll find them and a whole lot more at
                        <a href="">mozilla.com</a>
                        </p>
                    </div>
                </div>
        </div>
    </div>
    <div id="sample" >
            <h1>This is a sample paragraph</h1>
            <h3>clickMe! I'm Invincible!</h3>
            <p>
                this is a simple paragraph that is meant to be nice and easy to type which is why there will be
                mommas no periods or any capital letters so i guess this means that it cannot really be considered
                a paragraph but just a series of run on sentences this should help you get faster at typing as im
                trying not to use too many difficult words in it although i think that i might start making it hard
                by including some more difficult letters I'm typing pretty quickly so forgive me for any mistakes i
                think that i will not just tell you a story about the time i went to the zoo and found a monkey
                and a fox playing together they were so cute and i think that they were not supposed to be
                in the same cage
            </p>
    </div>
    <div class="formHidden">
        <form>
            <p>Check here to recieve iriekdi tour: <input type="checkbox" name="brochures" id="brochures"/></p>
            <div id="tour" class="row">
                <div class="column-4">
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                </div>
                <div class="column-4">
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                </div>
                <div class="column-4">
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                    <p>
                        <input type="checkbox" name="backpack" /><label for="backpack"> Backpack</label>
                    </p>
                </div>
            </div>
            <input type="button" name="send" value="send"/>
        </form>
    </div>
    <div>
        <div class="row">
            <div class="column-4">
                <h2>Mozilla Foundation<hr></h2>
                <p>
                    The Mozilla foundation provides overall support for mozilla open source software projects.
                </p>
                <a href="">Learn more about the Foundation...</a>
            </div>
            <div class="column-4">
                <h2>Mozilla store<hr></h2>
<!--               <div id="image" class="column-5 image-store">-->
<!--                </div>-->
                <div class="column-7 text-left">
                    <p>
                        Get <a href="">Firefox on CD</a>,</br> <a href="">t-shirts</a>, and more at the new
                        <a href="">mozilla store</a>.
                    </p>
                </div>
            </div>
            <div class="column-4">
                <h2>Other Mozilla Software<hr></h2>
                <ul class="ul-nav-1">
                    <li><a href=""><i class="fa fa-optin-monster" aria-hidden="true"></i> SeaMonkey 1.1.1</a></li>
                    <li><a href=""><i class="fa fa-grav" aria-hidden="true"></i> Camino 1.0.4</a></li>
                    <li><a href=""><i class="fa fa-sun-o" aria-hidden="true"></i> Sunbird 0.3.1</a></li>
                    <li><a href=""><i class="fa fa-firefox" aria-hidden="true"></i> Minimo Mobile Browser</a></li>
                    <li><a href=""><i class="fa fa-building-o" aria-hidden="true"></i> Buzilla</a></li>
                    <li><a href=""><i class="fa fa-tasks" aria-hidden="true"></i> All projects...</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="column-4">
                <h2>Announcements
                    <div class="right">
                        <i class="fa fa-file-code-o" aria-hidden="true"></i>
                    </div>
                    <hr>
                </h2>
                <ul class="ul-nav-1">
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i>firefox 2.0.1 and firefox 5.0.3</a></li>
                    <li><a href=""><i class="fa fa-shield" aria-hidden="true"></i> security a..</a></li><br/>
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i>firefox community list program</a></li></br>
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i>firefox 2.0.1 and firefox 5.0.3</a></li>
                    <li><a href=""><i class="fa fa-shield" aria-hidden="true"></i> security a..</a></li><br/>
                </ul>
            </div>
            <div class="column-4">
                <h2>mozillaZine News
                    <div class="right">
                        <i class="fa fa-file-code-o" aria-hidden="true"></i>
                    </div>
                    <hr>
                </h2>
                <ul class="ul-nav-1">
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i> Gram paradino alpha sdssd</a></li><br/>
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i> Goods summer of codes</a></li></br>
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i> mozilla firefox 2.0.1 released</a></li>
                </ul>
            </div>
            <div class="column-4">
                <h2>Developer News
                    <div class="right">
                        <i class="fa fa-file-code-o" aria-hidden="true"></i>
                    </div>
                    <hr>
                </h2>
                <ul class="ul-nav-1">
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i> Gram paradino alpha sdssd</a></li>
                    <li><a href=""><i class="fa fa-download" aria-hidden="true"></i>download</a></li><br/>
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i> His name is kit.... a developer kit</a></li></br>
                    <li><a href=""><i class="fa fa-file" aria-hidden="true"></i> firefox 2.0.1 and firefox 5.0.3</a></li>
                    <li><a href=""><i class="fa fa-shield" aria-hidden="true"></i>security a..</a></li><br/>
                </ul>
            </div>
        </div>
        <div id="footer">
            <hr>
            <div>
                <ul class="ul-inline ul-simple">
                    <li><a href="">Community Blog</a></li>
                    <li><a href="">Site Map</a></li>
                    <li><a href="">Security Updates</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Donate</a></li>
                </ul>
            </div>
            <div>
                <ul class="ul-inline ul-simple">
                    <li>international affiliation:</li>
                    <li><a href="">mozilla Europe</a></li>
                    <li><a href="">mozilla Japan</a></li>
                    <li><a href="">mozilla China</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="DOM/js/jquery-1.9.1.js"></script>

<!--OR-->
<!--<script src="https://code.jquery.com/jquery-1.9.1.js"></script>-->

<script src="script.js"></script>

</body>
</html>