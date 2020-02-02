<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#343a40" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css?<?php echo time();?>">
    <link rel="icon" href="./images/logo2.png" type="image/png" sizes="16x16">
    <title>Kaushal Mhalgi</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js?<?php echo time();?>"></script>
</head>
<body style="background-color: #343a40; padding: 0; margin: 0">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <a class="navbar-brand" href="#">
            <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Kaushal Mhalgi's Space
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home" id="li_home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects" id="li_projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education" id="li_education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#research" id="li_research">Ressearch Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills" id="li_skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-me" id="li_about-me">About me</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="shadow" id="go_to_top" style="transition: 0.2s all; display:none; cursor: pointer;background-color: #343a40; height: 50px; width: 50px; position:fixed; bottom: 15px; right: 20px; border-radius: 50%; text-align: center"><i class="material-icons" style="color: white; font-size: 40px">expand_less</i></div>
    <div class="modal fade bd-example-modal-xl" id="exampleModalCenter" modal-fade-transform="scale(0.8)" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Kaushal's Resume</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <object data="./Data/Resume.pdf" style="width: 100%; height: 75vh;"></object>
                </div>
                <div class="modal-footer">
                    <a href="./Data/Resume.pdf" target="_blank" class="btn btn-secondary">Open Resume in new tab</a>
                    <a href="./Data/Resume.pdf" class="btn btn-primary" download>Download Resume</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div id="home" class="container-fluid" style="text-align: center; color: white; height: 100vh">
            <center>
            <div class="mylogo">
                <img src="./images/logo.png" height="60px" width="60px" style="margin-top: 25vh">
            </div>
            <div class="text-intro" id="ti">
                <div id="ti-1">I am</div>
                <div id="ti-2">a block in this huge decentralized network</div>
            </div></center>
            <div class="brain_button" id="bb_but" data-toggle="tooltip" data-placement="left" title="Click here for a random fact!"></div>
            <div class="toast" id="fact_show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="./images/brain_dark.png" height="10" width="10" class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Powered by uselessfacts</strong>
                    <!-- <small class="text-muted">11 mins ago</small> -->
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body" id="dyn" style="color: black">
                    
                </div>
            </div>
            <button type="button" class="btn btn-dark mt-4" data-toggle="modal" data-target="#exampleModalCenter">
                View Resume
            </button>
            <div class="more_abt_me" id="mam" data-toggle="tooltip" data-placement="right" title="More about me"><i class="large material-icons" style="font-size: 50px">expand_more</i></div>
        </div>
        <div id="projects" class="container-fluid" style="background-color: #ffffff; text-align: center; color: black;">
            <center style="padding-top: 70px"><h3>Projects</h3></center>
            <div class="container-fluid" style="margin-top: 25px">
                <div class="row project_row" >
                    <div class="projects_col col-sm-12 col-md-4">
                        <div class="projects card shadow-sm" style="position: relative; margin: auto">
                        <div class="pr_logo shadow" style="position: absolute; background-image: url('images/blockchain.png'); top: -40px; left: 35%;"></div>
                            <div class="card-header" style="padding: 0; padding-top: 40px">
                                <div class="card-title project_title">GreenCoin:<br> Efficient Power Distribution in  <br>devices using Blockchain 2.0</div>
                            </div>
                            <div class="card-body">
                                <div class="project_desc">The project aims for a competitive environment in which energy trading and lending can be done among generating devices in an efficient and secured manner.<br></div>
                                <a href="./projects#pr-1" class="btn btn-dark mt-2">Read more &#x2192;</a>
                            </div>
                        </div>
                    </div>
                    <div class="projects_col col-sm-12 col-md-4">
                        <div class="projects card shadow-sm" style="position: relative; margin: auto">
                            <div class="pr_logo shadow" style="position: absolute; background-image: url('images/ehrs.png'); top: -40px; left: 35%; background-size: 80% 60%"></div>
                            <div class="card-header" style="padding: 0; padding-top: 40px">
                                <div class="card-title project_title">EHRS: <br>Electronic Health Record System</div>
                            </div>
                            <div class="card-body">
                                <div class="project_desc">The project is a web-based system used to store and organize patient's medical reports and prescription on a centralized server in order to eliminate a paper mess from the current system.<br></div>
                            <a href="./projects#pr-2" class="btn btn-dark mt-2">Read more &#x2192;</a>
                            </div>
                        </div>
                    </div>
                    <div class="projects_col col-sm-12 col-md-4">
                        <div class="projects card shadow-sm" style="position: relative; margin: auto">
                            <div class="pr_logo shadow" style="position: absolute; background-image: url('images/kuendo_logo.jpg'); top: -40px; left: 35%; background-size: 100% 100%"></div>
                            <div class="card-header" style="padding: 0; padding-top: 40px">
                                <div class="card-title project_title">Kuendo</div>
                            </div>
                            <div class="card-body" style="margin-top: -15px">
                                <div class="project_desc mt-4">The project involved a cross-platform application to provide a social networking platform to a particular group of people. The app was developed using ReactXP, a framework by Microsoft.</div>
                                <a href="./projects#pr-3" class="btn btn-dark mt-3">Read more &#x2192;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="education" class="container" style="text-align: center; color: white;">
            <center style="padding-top: 50px"><h3>Education</h3></center>
            <div class="container-fluid" style="color: black; margin-top: 25px">
                <div class="row education_row mt-5">
                    <div class="education_col col-md-6 col-sm-12">
                        <div class="educations card bg-light mb-3" style="margin: auto;">
                            <div class="ed_logo shadow" style="position: absolute; background-image: url('images/asu_logo.png'); top: -40px; left: 39%; background-size: 80% 60%"></div>
                                <div class="card-header" style="padding: 0; padding-top: 40px">
                                    <div class="card-title project_title">Arizona State University</br>(Ira A. Fulton Schools of Engineering)</div>
                                </div>
                                <div class="card-body">
                                    <div class="project_desc">M.S. Computer Science | CGPA: 3.78/4</br>[August 2019 - May 2021<i> (expected)</i>]</br><i class='mt-2'></br>Courses: Foundation of Algorithms, Data Visualization, Statistical Machine Learning, Data Mining, Mobile Computing</i></div>
                            </div>
                        </div>
                    </div>
                    <div class="education_col col-md-6 col-sm-12">
                        <div class="educations card bg-light mb-3" style="margin: auto;">
                            <div class="ed_logo shadow" style="position: absolute; background-image: url('images/mum_uni.png'); top: -40px; left: 39%; background-size: 90% 80%"></div>
                                <div class="card-header" style="padding: 0; padding-top: 40px">
                                    <div class="card-title project_title">University of Mumbai</br>(Vivekananda Education Society's <br>Institute of Technology)</div>
                                </div>
                                <div class="card-body">
                                    <div class="project_desc">Bachelors of Engineering in Computer Engineering | CGPA: 8.68/10</br>[August 2015 - May 2019]</br><i class='mt-2'><br>Courses: Computer Networks, Data Structures, Artificial Intelligence</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-xl" id="whitePaperModal" modal-fade-transform="scale(0.8)" tabindex="-1" role="dialog" aria-labelledby="whitePaperModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="whitePaperModalTitle">WhitePaper</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <object data="./Data/WhitePaper.pdf" style="width: 100%; height: 75vh;"></object>
                    </div>
                    <div class="modal-footer">
                        <a href="./Data/WhitePaper.pdf" target="_blank" class="btn btn-secondary">Open Paper in new tab</a>
                        <a href="./Data/WhitePaper.pdf" class="btn btn-primary" download>Download Paper</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="research" class="container-fluid" style="background-color: #ffffff; text-align: center; color: black;">
            <center style="padding-top: 70px"><h3>Research Work</h3></center>
            <div class="container-fluid" style="color: black; margin-top: 25px">
                <div class="row mt-5">
                    <div class="research_col col-md-6 col-sm-12">
                        <div class="researchs card bg-light mb-3" style="margin: auto;">
                            <h5 class="card-header" style="font-weight: bold">Patent</h5>
                            <div class="card-body">
                                <h5 class="card-title">A System and Method for Blockchain based Energy Trading</h5>
                                <hr>
                                <p class="card-text" style="padding-left: 15px; padding-right: 15px;">The patent presents a system and method for blockchain based energy trading, in which participating devices can generate power and trade that power with other participants. Smart-Contracts, Demand-Supply Equilibrium are the main features of the system.</p>
                                <!-- <a href="#" class="btn btn-dark mt-2">Read more &#x2192;</a> -->
                                <button type="button" class="btn btn-dark mt-2" data-toggle="modal" data-target="#whitePaperModal">
                                    Read more &#x2192;
                                </button>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Patent has been applied to Indian Patent Office</small>
                            </div>
                        </div>
                    </div>
                    <div class="research_col col-md-6 col-sm-12">
                        <div class="researchs card bg-light mb-3" style="margin: auto;">
                            <h5 class="card-header" style="font-weight: bold">Research Paper</h5>
                            <div class="card-body">
                                <h5 class="card-title">GreenCoin : Empowering smart cities using Blockchain 2.0</h5>
                                <hr>
                                <p class="card-text" style="padding-left: 15px; padding-right: 15px;">The paper aims to propose a novel idea to use blockchain technology and IoT devices or solar devices that generate solar power for smart power distribution within the ecosystem for optimal and secured transactions for the demands of many smart cities.</p>
                                <a href="https://ieeexplore.ieee.org/abstract/document/8946014/" target="_blank" class="btn btn-dark mt-2">Read the paper &#x2192;</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Paper has been published in IEEE Xplore Journal</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="skills" class="container" style="text-align: center; color: white;">
            <center style="padding-top: 50px"><h3>Skills</h3></center>
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 col-sm-6">
                    <img src="./images/blockchain.png" style="width: 90px; height: 90px" alt="Blockchain">
                    <div>Blockchain</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="./images/AI.png" style="width: 90px; height: 90px" alt="AI">
                    <div>Artificial Intelligence</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="./images/ethereum.png" style="width: 90px; height: 90px" alt="Ethereum">
                    <div>Ethereum</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="./images/hl_fa.png" style="width: 90px; height: 90px" alt="Hyperledger-fabric">
                    <div>Hyperledger-Fabric</div>
                </div>
            </div>
            <center style="margin-top: 50px"><h3>Languages</h3></center>
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 col-sm-6">
                    <img src="./images/java.png" style="width: 90px; height: 90px" alt="Java">
                    <div>Java</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="./images/android.png" style="width: 90px; height: 90px" alt="Android">
                    <div>Android</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="./images/html.png" style="width: 90px; height: 90px" alt="Web-dev">
                    <div>Web-dev</div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="./images/python.png" style="width: 90px; height: 90px" alt="Python">
                    <div>Python</div>
                </div>
            </div>
        </div>
        <div id="about-me" class="container-fluid" style="background-color: white;">
            <center style="padding-top: 70px"><h3>Something About Me</h3></center>
            <div class="row justify-content-center mt-4">
                <div id="abt-me-cnt" class="abt-me-cnt col-sm-12 col-md-4 offset-md-1 text-right">
                    <img src="./images/km.jpg" alt="My Image" id="myimage" title="My Image :)">
                </div>
                <div class="abt-me-cnt abt-me-intro col-sm-12 col-md-6 offset-md-1">
                    <div class='myintro' style="width: 80%">
                        Hello, I'm <span style="font-size: 30px; font-weight: bold;">Kaushal Mhalgi</span>..
                        <p><i>A peer in huge decentralized network!</i></p>
                        <p>I am Computer Scientist currently pursuing my masters in Computer Science from <b>Arizona State University</b>, Tempe. I have done my undergraduate in Computer Engineering from V.E.S. Institute of Technology, affiliated to University of Mumbai, India.</p>
                        <p>I am pretty passionate about Blockchain Development and thus I did my final year project on Blockchain 2.0 for which I published a paper in IEEE Xplore Journal. Also I have registered a patent with Indian Patent Office on the same idea. I also love web-developing and android developing, and I am used to few well-known frameworks like angular, react, etc.</p>
                        <p><i>Sincerely looking for Summer 2020 Internship opportunities! </i></p>
                        <hr>
                        <center>
                            <a href="https://linkedin.com/in/kaushal-mhalgi"><img src="./logos/linkedin.png" style="height: 25px; width: 28px" alt="" srcset=""></a>
                            <a href="https://www.facebook.com/kaushal.mhalgi"><img src="./logos/fblogo.png" style="margin-left: 15px; height: 25px; width: 25px" alt="" srcset=""></a>
                            <a href="https://twitter.com/kazzzz98"><img src="./logos/twitter.png" style="margin-left: 15px;height: 25px; width: 25px" alt="" srcset=""></a>
                            <a href="https://github.com/kaushal1998"><img src="./logos/github.png" style="margin-left: 15px;height: 25px; width: 25px" alt="" srcset=""></a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" style="height: 220px; color: white">
        <div class="container text-center" style="padding-top: 15px">
            <div class="row">
                <div class="col text-center">
                    Reach me via:
                </div>
            </div>
            <div class="row mt-2">
                <div class="links col text-center" style="color: rgba(255,255,255,0.5)">
                    <a href="mailto:kmhalgi@asu.edu">kmhalgi@asu.edu</a> &nbsp|&nbsp <a href="mailto:kmhalgi12@gmail.com">kmhalgi12@gmail.com</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="icon_link col text-center">
                    <a href="https://linkedin.com/in/kaushal-mhalgi"><img src="./logos/linkedin_white.png" style="margin-left: 10px; height: 25px; width: 25px" alt="" srcset=""></a>
                    <a href="https://www.facebook.com/kaushal.mhalgi"><img src="./logos/fb_white.png" style="margin-left: 15px; height: 25px; width: 25px" alt="" srcset=""></a>
                    <a href="https://twitter.com/kazzzz98"><img src="./logos/twitter_white.png" style="margin-left: 15px;height: 25px; width: 25px" alt="" srcset=""></a>
                    <a href="https://github.com/kaushal1998"><img src="./logos/github_white.png" style="margin-left: 15px;height: 25px; width: 25px" alt="" srcset=""></a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="links col text-center" style="text-decoration: none; color: rgba(255,255,255,0.5)">
                    <a href="#home">Home</a> &nbsp|&nbsp
                    <a href="#projects">Projects</a> &nbsp|&nbsp
                    <a href="#research">Research Work</a> &nbsp|&nbsp
                    <a href="#about-me">About me</a>
                </div>
            </div>
            <div class="mt-2" style="font-size: 13px">&copy; kaushalmhalgi.tech, 2019
        </div>
    </div>
</body>
<!-- logomakr.com/4WP2pI logomakr.com/9l7UaJ https://uselessfacts.jsph.pl/ attribution: <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div> -->
</html>