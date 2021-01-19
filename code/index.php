<?php session_start(); ?>
<?php require("botdetect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1f1f1f">
    <meta name="description" content="Visual and functional regression testing using browser automation, ui testing">
    <meta name="author" content="AMVARA CONSULTING S.L.">
    <meta name="keywords"
        content="automated software testing,web testing tools,browser automation,ui testing,automated web testing,gui testing tools,web macro,web ui testing,ui testing framework,ui automation,automated ui testing,web automation,website automation,usertesting, user testing, testing usability, web usability, usability test, usability testing, online usability testing tools, usability testing software, remote user testing , website usability testing , mobile user testing">
    <link rel="icon" href="./icons/reverse_favicon.png">
    <link rel="canonical" href="https://cometa.amvara.consulting/index.html" />
    <link rel="manifest" href="manifest.json" />

    <title>co.meta - Visual and functional regression testing made in Europe - automated web testing with excellence
    </title>
    <link href="/fonts/fontawesome-webfont.woff?v=4.2.0&display=swap" rel="preload" as="font" crossorigin>
    <!-- core CSS and main amvara css -->
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
    <link href="css/style.min.css" rel="stylesheet">

</head>
<!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <h2 class="logo"><span style='color: #e5b355;'>co.</span><span style='color: grey;'>meta</span>
                        </h2>
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#services">Features </a></li>
                        <li class="scroll"><a href="#portfolio">Screenshots</a></li>
                        <li class="scroll"><a href="#animated-number">Architecture</a></li>
                        <li class="scroll"><a href="#enterprise">Enterprise </a></li>
                        <li class="scroll"><a href="#pricing">Price</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->


    <!--#welcome-->
    <section id="welcome">
        <div class="welcome">
            <div class="left-side">
                <div class="left-text">
                        <!--Left side Texts-->
                    <h1 class="m-title">Functional and Visual Regression Testing with excellence</h1>
                    <h2 class="m-subtitle">Don't break code. Don't break layout.</h2>
                    <h2 class="m-subtitle">Using cometa provides many benefits for your project.</h2>
                    <ul class="m-list">
                        <li>Automation of human actions on websites made easy. </li>
                        <li>100% Open source made with &hearts; in Barcelona.</li>
                        <li>Visual comparison with screenshots!</li>
                        <li>Easy UI testing on over 2000 devices.</li>
                        <li>REST API integrates easy and smooth.</li>
                        <li>Now that you know it - there are no more excuses left.</li>
                    </ul>
                    <div class="buttons">
                        <a class="btn btn-primary btn-lg m-button" rel="noopener" href="https://cometa.amvara.de/"
                            target="_blank">Create a Test</a>
                        <a class="btn btn-primary btn-lg m-button" href="#get-in-touch">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="right-side" id="right-side">
                        <!--Right side Texts-->
                <div onclick="playvideo()" id="play" class="play">
                     <!--Video-->
                    <h3 class="m-videotitle">Watch a video about it </h3>
                </div>
            </div>

        </div>
    </section>
    <!--/#welcome-->

    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Cometa features</h2>
                <p class="text-center wow fadeInDown">Don't break code. Don't break layout. Using cometa provides many
                    benefits for your project.
                </p>
                <p class="text-center wow fadeInDown">Being 100% open source and providing complete functionalities via
                    REST API makes integration of third party tools (<a href="https://jmeter.apache.org/">jMeter</a>, <a
                        href="https://www.jenkins.io/">Jenkins</a>, <a href="htstps://git-scm.com/">Git</a>, ...) even
                    more easy.</p>
            </div>

            <div class="features">
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                        data-wow-offset="150">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="icons/Icons-portfolio/icons8-test-aprobado-64.png"
                                    alt="Icon of Test Automation">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Test Automation</h4>
                                <p>Create tests to analyze and verify
                                    each part of your website. Simply
                                    check its status.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img class="img_features" src="icons/Icons-portfolio/icons8-logo-de-google-64.png"
                                    alt="Icon of Google">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sign in via Google, OIDC, ... </h4>
                                <p>Access through your Google account and
                                    enjoy our service.
                                    On-premises installation uses OIDC login.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img class="img_features"
                                    src="icons/Icons-portfolio/icons8-múltiples-dispositivos-64.png"
                                    alt="Icon of Multiple devices">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Test on Multiple Devices</h4>
                                <p>Test the functionalities of your
                                    website in different responsive devices. Receive eMail summary of test results.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img class="img_features" src="icons/Icons-portfolio/icons8-horas-extras-64.png"
                                    alt="Icon of a Calendar Schedule ">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Schedule Execution</h4>
                                <p>Schedule the execution of your tests
                                    weekly or monthly at the minute,
                                    time or day that you want.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img class="img_features"
                                    src="icons/Icons-portfolio/icons8-abrir-en-el-navegador-64.png"
                                    alt="Icon of Web Browser">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Browser Automation</h4>
                                <p>Test your web projects in just some browsers or compatibility on 2000+ devices with
                                    BrowserStack integratioln. Software made in Europe with excellence.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img class="img_features" src="icons/Icons-portfolio/icons8-árbol-de-carpetas-64.png"
                                    alt="Icon of folders">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Flexible Hierarchy</h4>
                                <p>Manage your tests through our hierarchy,
                                    where you can select the department,
                                    application and environment of your project.</p>
                                <p>
                                    User based folder type organization. Each user can personally re-group individual
                                    tests. Woah!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->






    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">How does co.meta Work</h2>
                <p class="text-center wow fadeInDown">co.meta is a web automation, ui testing tool to create organized
                    ui tests online
                    to check your project.<br>
                    co.meta continously tests functionality and performes visual regression tests with image comparison.
                    <br>This will take your development to the next level.
                </p>
                <p class="text-center wow fadeInDown">
                    Enjoy the screenshots ... or try out co.meta and convince yourself.
                    <a rel="noopener" class="btn btn-primary btn-lg" href="https://cometa.amvara.de"
                        target="_blank">co.meta trial</a>
                </p>
            </div>

        </div>
        <!--/.container-->
        <section class="screenshots">
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">

                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan Editor ... no programming knowledge needed."
                    href="cometa_images/screenshots/StepEditor.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/StepEditor.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/StepEditor.PNG" type="image/png">
                            <img src="cometa_images/screenshots/StepEditor.PNG" alt="Testplan Editor Screenshot">
                        </picture>
                    </div>
                    <h4>Testplan Editor</h4>
                    <div class="screenshottext">
                        Automated Software Testing made easy. The web testing editor is selfexplaining. Write
                        parameterized tests in almost natural language.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Browser Selection ... all you can eat and massive parallel on demand"
                    href="cometa_images/screenshots/BrowserSelection.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/BrowserSelection.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/BrowserSelection.PNG" type="image/png">
                            <img src="cometa_images/screenshots/BrowserSelection.PNG"
                                alt="Browser Selection Screenshot">
                        </picture>
                    </div>
                    <h4>Selection of browsers</h4>
                    <div class="screenshottext">
                        Vast variety of browsers and operating systems to choose from. Massive parallel and automated
                        website testing saves countless hours.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan Scheduling ... flexible no, next level of flexible"
                    href="cometa_images/screenshots/SchedulePopup.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/SchedulePopup.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/SchedulePopup.PNG" type="image/png">
                            <img src="cometa_images/screenshots/SchedulePopup.PNG" alt="Testplan Scheduling Screenshot">
                        </picture>
                    </div>
                    <h4>Scheduling tests</h4>
                    <div class="screenshottext">
                        Let co.meta do automated web testing while your are sleeping.
                        Why make things more complicated?
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Live Steps ... observe what co.meta is doing, anytime."
                    href="cometa_images/screenshots/LiveSteps.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/LiveSteps.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/LiveSteps.PNG" type="image/png">
                            <img src="cometa_images/screenshots/LiveSteps.PNG" alt="Life Steps Screenshot">
                        </picture>
                    </div>
                    <h4>Live steps</h4>
                    <div class="screenshottext">
                        See live what co.meta executes. Complex software made easy.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Overview Filtering ... flexible filtering for any user as needed."
                    href="cometa_images/screenshots/SearchFilters.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/SearchFilters.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/SearchFilters.PNG" type="image/png">
                            <img src="cometa_images/screenshots/SearchFilters.PNG" alt="Oview Filtering Screenshot">
                        </picture>
                    </div>
                    <h4>Overview Filtering</h4>
                    <div class="screenshottext">
                        Using flexible filtering gives every user a personal view to the testplan dashboard, as needed.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan sorting ... give the right importance to your testplan dashboard."
                    href="cometa_images/screenshots/FeatureSorting.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureSorting.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureSorting.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureSorting.PNG"
                                alt="Administration Panel Screenshot">
                        </picture>
                    </div>
                    <h4>Testplan Sorting</h4>
                    <div class="screenshottext">
                        Give your dashboard the correct importance of every items. This way co.meta users may focus just
                        in time on what they need to see.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Test results ... see how your test performs."
                    href="cometa_images/screenshots/FeatureResults.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureResults.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureResults.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureResults.PNG"
                                alt="Administration Panel Screenshot">
                        </picture>
                    </div>
                    <h4>Test Results</h4>
                    <div class="screenshottext">
                        Understanding the performance of your gui testing is probably the most important task. Fine
                        layout, easy overview and more details on click.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan details ... each step has details for review."
                    href="cometa_images/screenshots/FeatureStepResult.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureStepResult.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureStepResult.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureStepResult.PNG"
                                alt="Testplan Details Screenshot">
                        </picture>
                    </div>
                    <h4>Step Detail Results</h4>
                    <div class="screenshottext">
                        Each step records the results as executed. Comparing the screenshots shows pixel difference.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Result Scores ... understanding made easy."
                    href="cometa_images/screenshots/FeatureResultScore.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureResultScore.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureResultScore.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureResultScore.PNG"
                                alt="Administration Panel Screenshot">
                        </picture>
                    </div>
                    <h4>Result Score</h4>
                    <div class="screenshottext">
                        Result score gives a clean and fast overview of your testplan performance.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan Logging ... professional logging as basis for deep understanding."
                    href="cometa_images/screenshots/FeatureResultLog.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureResultLog.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureResultLog.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureResultLog.PNG"
                                alt="Professional logging Screenshot">
                        </picture>
                    </div>
                    <h4>Professional Logging</h4>
                    <div class="screenshottext">
                        Logging is the art of understanding details. Consume logs right inside co.meta. Selfservice at
                        it's best.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan actions ... easy access to most needed actions."
                    href="cometa_images/screenshots/FeatureOptions.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureOptions.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureOptions.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureOptions.PNG"
                                alt="Administration Panel Screenshot">
                        </picture>
                    </div>
                    <h4>Testplan actions</h4>
                    <div class="screenshottext">
                        Most needed actions in prominent position for fast access. Saves valuable time.
                        Reduced complexity for easy understanding.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Administration Panel ... co.meta is designed for selfservice."
                    href="cometa_images/screenshots/AdminPanel.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/AdminPanel.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/AdminPanel.PNG" type="image/png">
                            <img src="cometa_images/screenshots/AdminPanel.PNG" alt="Administration Panel Screenshot">
                        </picture>
                    </div>
                    <h4>Administration panel</h4>
                    <div class="screenshottext">
                        The administration panel provides a minimal set of actions.
                        co.meta was designed to be self-service. This is probably the most unused screen.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Edit general information of your testplan."
                    href="cometa_images/screenshots/EditFeatureInfo.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/EditFeatureInfo.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/EditFeatureInfo.PNG" type="image/png">
                            <img src="cometa_images/screenshots/EditFeatureInfo.PNG"
                                alt="Edit Testplan general information Screenshot">
                        </picture>
                    </div>
                    <h4>Choosing Departments</h4>
                    <div class="screenshottext">
                        Selfexplaining. co.meta offers an easy to understand security-concept for multi-homed tenants.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="General information of your testplan gives a quick overview."
                    href="cometa_images/screenshots/FeatureBox.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureBox.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureBox.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureBox.PNG" alt="Overview information Screenshot">
                        </picture>
                    </div>
                    <h4>Testplan Box</h4>
                    <div class="screenshottext">
                        Each testplan is represented with detailed information on the dashboard. Focus on important
                        information of complex test-situations.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Testplan Actions ... clean interface, actions at your fingertips."
                    href="cometa_images/screenshots/FeatureOptionsMenu.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/FeatureOptionsMenu.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/FeatureOptionsMenu.PNG" type="image/png">
                            <img src="cometa_images/screenshots/FeatureOptionsMenu.PNG"
                                alt="Feature Options Menu Screenshot">
                        </picture>
                    </div>
                    <h4>Actions Dashboard Menu</h4>
                    <div class="screenshottext">
                        The clean layout makes navigation to actions in testplan dashboard easy. Clean layouts help to
                        focus.
                    </div>
                </div>
            </div>
            <div class="screenshotdiv wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms"
                data-wow-offset="150">
                <div class="screenshotdivcontainer" data-magnify="gallery" data-group="a"
                    data-caption="Continue on failure feature."
                    href="cometa_images/screenshots/ContinueOnFailure.PNG">
                    <div class="imagewrapper">
                        <picture>
                            <source srcset="cometa_images/screenshots/ContinueOnFailure.webp" type="image/webp">
                            <source srcset="cometa_images/screenshots/ContinueOnFailure.PNG" type="image/png">
                            <img src="cometa_images/screenshots/ContinueOnFailure.PNG"
                                alt="Continue on failure Screenshot">
                        </picture>
                    </div>
                    <h4>Continue on failure</h4>
                    <div class="screenshottext">
                        With 'Continue on failure' you can define whether or not failing steps will stop the execution of a feature.
                    </div>
                </div>
            </div>
        </section>

    </section>
    <!--/#portfolio-->


    <section id="animated-number">
        <div class="electric"></div>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Architecture</h2>
                <p class="text-center wow fadeInDown">co.meta has been developed with 100% open source tools.
                    Scales 100%. Can be used on-premises, on desktop or on cloud. co.meta is unicode compliant.
                    The co.meta REST API integrates easily with continous testing solutions as seen in <a
                        href="https://about.gitlab.com/">gitlab</a>. </p>
            </div>
            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <a href="https://www.docker.com/"><img class="animated-number" alt="www.docker.com"
                                style="background-color: white;" src="icons/Icons-portfolio/icons8-docker-512.png"></a>
                        <strong><a href="https://www.docker.com/">Docker</a></strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <a href="https://www.selenium.dev/"><img class="animated-number" alt="www.selenium.dev"
                                style="background-color: white;"
                                src="icons/Icons-portfolio/icons8-selenium-512.png"></a>
                        <strong><a href="https://www.selenium.dev/">Selenium</a></strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <a href="https://www.djangoproject.com/"><img class="animated-number"
                                style="background-color: white;" alt="www.djangoproject.com"
                                src="icons/Icons-portfolio/icons8-django-512.png"></a>
                        <strong><a href="https://www.djangoproject.com/">Django</a></strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <a href="https://www.python.org/"><img class="animated-number" alt="www.python.org"
                                style="background-color: white;" src="icons/Icons-portfolio/icons8-python-512.png"></a>
                        <strong><a href="https://www.python.org/">Python</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#animated-number-->


    <section id="enterprise">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">co.meta For Enterprise</h2>
                <p class="text-center wow fadeInDown">Time always means money. co.meta reduces test hours to minutes or
                    seconds.</p>
            </div>
            <div class="advantage">
                <div>
                    <ul class="spec-list">
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Multiple Authentication Providers</div>
                        </li>
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Installation on premise or Cloud</div>
                        </li>
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Custom installation time in 15 min</div>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="spec-list">
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Enterprise Security</div>
                        </li>
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Full access control by users and groups</div>
                        </li>
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Access security by OIDC</div>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="spec-list">
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Live, Interactive Testing</div>
                        </li>
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Implemented in docker technology</div>
                        </li>
                        <li><img alt="check" class="check" src="icons/Icons-portfolio/icons8-tick-box-96.png">
                            <div>Priority Support</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#enterprise-->


    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pricing Table</h2>
            </div>

            <div class="pricings">
                <div class="p-header">
                    <div class="p-header-content">
                    <!-- Types of pricing models  -->

                        <div class="p-header-content-container">
                            <input type="radio" onclick="selectprice(1)" class="p-radio" id="Planid_0" name="Pricing">
                            <label for="Planid_0" class="p-label">Free</label>

                        </div>
                        <div class="p-header-content-container">
                            <input type="radio" onclick="selectprice(2)" class="p-radio" id="Planid_1" name="Pricing"
                                checked>

                            <label for="Planid_1" class="p-label">Enterprise</label>

                        </div>
                    </div>
                </div>
                <table class="p-table">
                    <!-- All the differences  -->
                    <tbody class="p-tbody">
                        <tr>
                            <td class="p-title">Price</td>
                            <td class="p-content p-free">Free</td>
                            <td class="p-content p-enterprise">Pay What You Want </td>
                        </tr>
                        <tr>
                            <td class="p-title">Tests</td>
                            <td class="p-content p-free">1</td>
                            <td class="p-content p-enterprise">Unlimited </td>
                        </tr>
                        <tr>
                            <td class="p-title">Executions</td>
                            <td class="p-content p-free">500</td>
                            <td class="p-content p-enterprise">Unlimited</td>
                        </tr>
                        <tr>
                            <td class="p-title">Multiple Authentication Providers</td>
                            <td class="p-content p-free">&Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>
                        </tr>
                        <tr>
                            <td class="p-title">Enterprise Security</td>
                            <td class="p-content p-free">&Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>
                        </tr>
                        <tr>
                            <td class="p-title">Full access control by users & groups</td>
                            <td class="p-content p-free"> &Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>
                        </tr>
                        <tr>
                            <td class="p-title">Access security by OIDC</td>
                            <td class="p-content p-free">&Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>
                        </tr>
                        <tr>
                            <td class="p-title">Live, Interactive Testing</td>
                            <td class="p-content p-free">&Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>
                        </tr>
                        <tr>
                            <td class="p-title">Web Macros</td>
                            <td class="p-content p-free">&Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>
                        </tr>
                        <tr>
                            <td class="p-title">Priority Support </td>
                            <td class="p-content p-free">&Cross;</td>
                            <td class="p-content p-enterprise"> &check;</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-buttons">
                <a class="btn btn-primary btn-lg p-button" href="#get-in-touch">Contact us</a>
            </div>
        </div>
    </section>
    <!--/#pricing-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">CONTACT US</h2>
                <p class="text-center wow fadeInDown">Please fill in the form below and we will get back to you with a
                    quote and answers as soon as possible.</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="address">
                        <h3>Address</h3>
                        <a rel="noopener"
                            href="https://www.google.es/maps/place/Gran+Via+de+les+Corts+Catalanes,+636,+08010+Barcelona/@41.3896301,2.1669692,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a2f21893fc83:0x515f2a3568c82114!8m2!3d41.3896261!4d2.1691632"
                            target="_blank">
                            <p class="swap">Gran Via de les Corts Catalanes 636, Princ. 1B</p>
                            <p class="swap">08007 Barcelona · Spain</p>
                        </a>
                    </div>

                    <div class="address">
                        <h3>Phone </h3>
                        <p>+49 - 711 - 89467029</p>
                        <p>+34 - 717102603</p>
                    </div>

                    <div class="address">
                        <h3>Email</h3>
                        <p>info@amvara.de</p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <form method="post" name="contact-form" id="main-contact-form" action="./">
                        <div class="form-group">
                            <label for="name">‎Name</label>
                            <input type="text" required class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" required class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" required class="form-control" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea required rows="8" class="form-control" id="message" name="message"></textarea>
                        </div>
                        <?php
                            $MailCaptcha = new Captcha("MailCaptcha");
                            $MailCaptcha->UserInputID = "answer";
                            echo $MailCaptcha->Html(); 
                        ?>
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            <input type="text" required class="form-control" id="answer" name="answer">
                        </div>
                        <button class="btn btn-primary" type="submit">SUBMIT</button>
                        <div id="respuesta" style="display: none;"> </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/#get-in-touch-->

    <!--Footer + credits-->

    <footer id="footer">
        <div class="container text-center">
            <a rel="noopener" href="https://www.amvara.de/#/" target="_blank">AMVARA CONSULTING. Software made with
                &hearts; in Barcelona/Europe.</a>
        </div>
        <hr class="hrfooter">
        <div style="
            padding: 20px;
            font-size: small;
            color: #a5a5a5;
        ">
            The icons used in this webpage are from <a href="https://icons8.com/">Icons8.com</a>
            The loading video asset used in this webpage is from the user Yahya012 on <a
                href="https://pngtree.com/">pngtree.com.</a>
            Keywords that users find usefull when searching for co.meta:
            automated software testing,
            web testing tools,
            browser automation,
            ui testing,
            automated web testing,
            gui testing tools,
            Web Macro,
            Web UI Testing,
            UI Testing Framework,
            UI Automation,
            Automated UI Testing,
            Web Automation,
            Website Automation
        </div>
    </footer>
    <!--/#footer-->


    <script src="js/combined.min.js"></script>


    <!-- Images open/close -->
    <script>
        $(function () {
            "use strict";

            $(document).keyup(function (e) {
                // if (e.keyCode === 13) $('.save').click();     // enter
                if (e.keyCode === 27) $(".magnify-button-close").click(); // esc closes popups
            });



        });
    </script>



    <!-- Close navbar onclick -->
    <script>
        $(function () {
            "use strict";

            $(".scroll a").click(function () {
                $("#header nav div .navbar-collapse").removeClass("collapse in");
                $("#header nav div .navbar-collapse").addClass("collapse");
            });

        });
    </script>

    <!-- Video play/pause -->
    <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>

    <!-- Ajax send mail (contact us) -->
    <script>
        $(document).ready(function () {
            var form = $("#main-contact-form");
            form.submit(function (event) {
                // Prevent default form submission behavior
                event.preventDefault();
                var form_status = $('<div class="form_status"></div>');
                $.ajax({
                    url: "./php/mail.php",
                    type: "POST",
                    beforeSend: function(){
                        // Show loading spinner
                        form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Sending email...</p>').fadeIn() );
                    },
                    data: form.serialize(),
                    success: function (data) {
                        // If email was successful, hide wrong answer block and show successful message
                        $("#respuesta").slideDown();
                        form_status.html(`<p class="text-success">${data}</p>`).delay(3000).fadeOut();
                    },
                    error: function(data) {
                        // If email wasn't successful or captcha was invalid, hide success block and show wrong answer block with text from server
                        form_status.html('');
                        $("#respuesta").slideDown();
                        $("#respuesta").html(data.responseText);
                    }
                })
                return false;
            });
        });
    </script>
    <!--Captcha-->

    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6Ld-7KcZAAAAAN_Wopse57dhUAeG8pblDgck_Dd2"></script> -->
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->

</body>

</html>