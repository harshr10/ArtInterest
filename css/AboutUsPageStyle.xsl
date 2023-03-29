<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <!--<xsl:output method="html"/>-->

    <xsl:template match="/">
        <html>
<head>
    <meta charset="utf-8"></meta>
    <meta name="viewport" content="width=device-width , intial-scale=1.02"></meta>
    <title>ArtInterest</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"></link>

    <link rel="stylesheet" type="text/css" href="css/AboutPageStyle.css"></link>

    <script src="https://kit.fontawesome.com/dbf904400b.js" crossorigin="anonymous"></script>
    <script>
        function redirectFunc() {
            location.href="HomePage.html"
        }
    </script>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/BlueLogo-removebg.png" width="125px" onclick="redirectFunc()" style="cursor: pointer;">
                </img>
            </div>
            <nav>
                <ul id="Menuitems">
                    <li><a href="HomePage.php"><i class="fa-solid fa-house"></i>
                        <xsl:value-of select="About/Navbar/Home"/>
                    </a></li>
                    <li><a href="AllArtsPage.php"><i class="fa-solid fa-palette"></i>
                        <xsl:value-of select="About/Navbar/ArtWorks"/>
                    </a></li>
                    <li><a href="SearchPage.php"><i class="fa-solid fa-magnifying-glass"></i>
                        <xsl:value-of select="About/Navbar/Search"/>
                    </a></li>
                    <li><a href="AboutUsPage.xml"><i class="fa-solid fa-circle-info"></i>
                        <xsl:value-of select="About/Navbar/About"/>
                    </a></li>
                    <li><a href="ContactPage.html"><i class="fa-solid fa-envelopes-bulk"></i>
                        <xsl:value-of select="About/Navbar/Contact"/>
                    </a></li>
                    <li><a href="NewProflePage.php"><i class="fa-solid fa-circle-user"></i>
                        <xsl:value-of select="About/Navbar/Account"/>
                    </a></li>
                </ul>
            </nav>
            <a href="CartPage.html"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                <div class="menu-icon">
                    <i class="fa-solid fa-bars fa-xl" onclick="menutoggle()"></i>
                </div>
            </div>
        </div>
    </div>

<div style="max-width: 900px; margin: auto;">
    <div style="display: wrap; align-items: center; flex-wrap: wrap; justify-content: space-between;
        margin-top: 25px;">
        <img src="images/The Cathedral at Trani.jpg" align="right"></img>
        <xsl:for-each select="About/description">
            <h2 style="text-align: left; position: relative; line-height: 60px;color: #555;">
                <xsl:value-of select="title"/></h2>

            <p><xsl:value-of select="value"/></p>
        </xsl:for-each>
    </div>

    <div style="display: wrap; align-items: center; flex-wrap: wrap; justify-content: space-between;">
        <xsl:for-each select="About/contact">
            <h2 style="text-align: left; position: relative; line-height: 60px;color: #555;"><xsl:value-of select="title"/></h2>
        </xsl:for-each>

        <xsl:for-each select="About/contact/value">
            <p><xsl:value-of select="."/></p>
        </xsl:for-each>
    </div>

    <div style="display: wrap; align-items: center; flex-wrap: wrap; justify-content: space-between;">
        <xsl:for-each select="About/address">
            <h2 style="text-align: left; position: relative; line-height: 60px;color: #555;"><xsl:value-of select="addresstitle"/></h2>
        </xsl:for-each>

        <xsl:for-each select="About/address/subaddress">
            <p><xsl:value-of select="."/></p>
        </xsl:for-each>
    </div>

    <div style="display: wrap; align-items: center; flex-wrap: wrap; justify-content: space-between;">
        <xsl:for-each select="About/reason">
            <h2 style="text-align: left; position: relative; line-height: 60px;color: #555;">
                <xsl:value-of select="title"/></h2>
        </xsl:for-each>

        <xsl:for-each select="About/reason/value">
            <p><xsl:value-of select="."/></p>
        </xsl:for-each>
    </div>
</div>

<!-- FOOTER -->

<div class="footer" style="background: black; margin-top:40px;font-size: 14px;color: #8a8a8a;">
    <div style="max-width: 1300px; margin: auto; padding-left: 25px; padding-right: 25px;">
        <div class="row">
            <div class="footer-col-1" style="margin-bottom: 20px;">
                <h3 style="color:white">
                    <xsl:value-of select="About/footer/col-1/value1"/>
                </h3>
                <h4><xsl:value-of select="About/footer/col-1/value2"/></h4>
                <div class="app-logo">
                    <a href=""><i class="fa-brands fa-google-play fa-2x"></i></a>
                    <a href=""><i class="fa-brands fa-app-store-ios fa-2x"></i></a>
                </div>
            </div>
            <div class="footer-col-2" style="text-align: center;margin-bottom: 20px;">
                <img src="images/BlueLogo-removebg.png" width="125px" onclick="redirectFunc()" style="cursor: pointer;">
                </img>
                <h4>
                    <xsl:for-each select="About/footer/col-2/slogan">
                        <xsl:value-of select="."/><br></br>
                    </xsl:for-each>
                </h4>
            </div>
            <div class="footer-col-3" style="text-align: center;margin-bottom: 20px;">
                <h3><xsl:value-of select="About/footer/col-3/UsefullLinksTitle"/></h3>
                <ul style="list-style-type: none;">
                    <h4><li><xsl:value-of select="About/footer/col-3/coupons"/></li>
                    <li><xsl:value-of select="About/footer/col-3/bLogpost"/></li>
                    <li><xsl:value-of select="About/footer/col-3/returnpolicy"/></li>
                    <li><xsl:value-of select="About/footer/col-3/joinaffiliate"/></li></h4>
                </ul>
            </div>
            <div class="footer-col-4" style="text-align: center; margin-bottom: 20px;">
                <h3><xsl:value-of select="About/footer/col-4/FollowUsTitle"/></h3>
                <ul style="list-style-type: none;">
                    <h4><li><xsl:value-of select="About/footer/col-4/insta"/></li>
                    <li><xsl:value-of select="About/footer/col-4/fb"/></li>
                    <li><xsl:value-of select="About/footer/col-4/twitter"/></li>
                    <li><xsl:value-of select="About/footer/col-4/youtube"/></li></h4>
                </ul>
            </div>
        </div>
        <hr style="border: none; background: #b5b5b5; height: 1px;margin: 20px 0;"></hr>
        <p class="copyright" style="text-align: center;">
            <i class="fa-solid fa-copyright"></i> Copyright &#64;ArtInterest 2022 </p>
    </div>
</div>
<!-- END -->

</body>
</html>
</xsl:template>
</xsl:stylesheet>
