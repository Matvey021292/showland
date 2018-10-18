<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <title>Showland</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    <link rel="stylesheet" href="./showland/css/material-dashboard.min.css">
</head>


<body>
<div class="bg-image"></div>
<div class="card card-stats card-stats-header pl-3 pr-3">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header w-100 card-header-danger card-header-icon">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="40">
                        <g>
                            <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"
                                  fill="#FFFFFF"/>
                        </g>
                    </svg>

                </div>
                <form class="form-inline">
                    <div class="form-group w-100 mt-4 mb-2">
                        <input type="text" class="form-control w-100" id="inputPassword2" placeholder="Поиск...">
                        <div class="alert-danger alert mt-2 ">Запись не найдена</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="./showland/images/sidebar-1.jpg">
        <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="e271c449-efc1-c616-0a61-7a6e84ae33df">
            <ul class="nav">
            </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
        <div class="sidebar-background" style="background-image: url(./showland/images/sidebar-1.jpg) "></div>
    </div>
    <div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="modal-showTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header " data-color="rose" data-background-color="black">
                    <h5 class="modal-title" id="modal-showTitle">Modal title</h5>
                    <hr>
                    <ul class="d-flex list-unstyled mb-0 flex-column w-100">
                        <li>
                            <button class="btn btn-primary btn-desc-resize" data-width="100%" data-height="100vh"><i
                                        class="fas fa-desktop"></i><span>1920x1080</span></button>
                        </li>
                        <li>
                            <button data-bg="MacBook-Pro-mockup.png" class="btn btn-primary btn-desc-resize"
                                    data-width="1368px" data-height="768px"><i
                                        class="fas fa-laptop"></i><span>1368x768</span></button>
                        </li>
                        <li>
                            <button class="btn btn-primary btn-desc-resize" data-width="768px" data-height="1024px"><i
                                        class="fas fa-tablet-alt"></i><span>768x1024</span></button>
                        </li>
                        <li>
                            <button class="btn btn-primary btn-desc-resize" data-width="375px" data-height="667px"><i
                                        class="fas fa-mobile-alt"></i><span>375x667</span></button>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php include './functionv2.php'; ?>

</div>
<script src="./showland/js/jquery.js"></script>
<script src="./showland/js/bootstrap.min.js"></script>
<script src="./showland/js/owl.carousel.min.js"></script>
<script src="./showland/js/script.js"></script>

</body>
</html>