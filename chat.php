<style>
    .chat-app .people-list {
        left: 0;
        top: 0;
        padding: 20px;
        border-top-left-radius: 16px;
        border-bottom-left-radius: 16px;

    }

    .chat-app .chat {
        /*margin-left: 280px;*/
        /* border-left: 1px solid #eaeaea; */
    }

    .people-list {
        -moz-transition: .5s;
        -o-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s
    }

    .people-list .chat-list li {
        padding: 10px 15px;
        list-style: none;
        border-radius: 3px;
    }

    .people-list .chat-list li:hover {
        background:rgba(103, 116, 142, 0.27);;
        cursor: pointer;
        /* color: #000005; */
    }

    .people-list .chat-list li.active {
        /* background: #efefef;
        color: #000005; */
        background: #67748e63;
        color: #67748e;
    }

    .people-list .chat-list li .name {
        font-size: 16px;
        font-family: 'Poppins','Lato';
    }

    .people-list .chat-list img {
        width: 45px;
        border-radius: 50%
    }

    .people-list img {
        float: left;
        border-radius: 50%
    }

    .people-list .about {
        float: left;
        padding-left: 8px;
    }

    .people-list .status {
        color: #999;
        font-size: 13px;
    }

    .chat .chat-header {
        padding: 15px 20px;
        border-bottom: 2px solid #f4f7f6;
    }

    .chat .chat-header img {
        float: left;
        border-radius: 40px;
        width: 40px;
    }

    .chat .chat-header .chat-about {
        float: left;
        padding-left: 10px;
    }

    .chat .chat-history {
        padding: 20px;
        /* border-bottom: 2px solid #fff; */
    }

    .chat .chat-history ul {
        padding: 0;
    }

    .chat .chat-history ul li {
        list-style: none;
        margin-bottom: 30px;
    }

    .chat .chat-history ul li:last-child {
        margin-bottom: 0px;
    }

    .chat .chat-history .message-data {
        margin-bottom: 15px;
    }

    .chat .chat-history .message-data img {
        border-radius: 40px;
        width: 40px;
    }

    ul.list-unstyled.chat-list.mt-2.mb-0 {
        /* height: 560px; */
        height: 514px;
        overflow: hidden;
        /* overflow-y: scroll; */
    }

    .chat .chat-history .message-data-time {
        color: #c1c1c1;
        padding-left: 6px;
    }

    .chat .chat-history .message {
        color: #444;
        padding: 10px 20px;
        line-height: 26px;
        font-size: 16px;
        border-radius: 7px;
        display: inline-block;
        position: relative;
    }

    .chat .chat-history .message:after {
        bottom: 100%;
        left: 7%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: #fff;
        border-width: 10px;
        margin-left: -10px;
    }

    .chat .chat-history .my-message {
        background: #efefef;
    }

    .chat .chat-history .my-message:after {
        bottom: 100%;
        left: 30px;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: #efefef;
        border-width: 10px;
        margin-left: -10px;
    }

    .chat .chat-history .other-message {
        background: #e8f1f3;
        text-align: right;
    }

    .chat .chat-history .other-message:after {
        border-bottom-color: #e8f1f3;
        left: 93%;
    }

    .chat .chat-message {
        padding: 21.2px;
    }

    .online,
    .offline,
    .me {
        margin-right: 2px;
        font-size: 8px;
        vertical-align: middle;
    }

    .online {
        color: #86c541;
    }

    .offline {
        color: #e47297;
    }

    .me {
        color: #1d8ecd;
    }

    .float-right {
        float: right;
    }

    .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0
    }

    .text-right {
        float: right;
    }

    @media only screen and (max-width: 767px) {
        .chat-app .people-list {
            border-bottom: 2px solid #f4f7f6;
            /*    height: 465px;*/
            /*    width: 100%;*/
            /*    overflow-x: auto;*/
            /*    background: #fff;*/
            /*    left: -400px;*/
            /*    display: none*/
        }

        .chat-app .people-list.open {
            left: 0;
        }

        .chat-app .chat {
            margin: 0;
        }

        .chat-app .chat .chat-header {
            border-radius: 0.55rem 0.55rem 0 0;
        }

        .chat-app .chat-history {
            height: 300px;
            overflow-x: auto;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 992px) {
        .chat-app .chat-list {
            height: 650px;
            overflow-x: auto;
        }

        .chat-app .chat-history {
            height: 600px;
            overflow-x: auto;
        }
    }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
        .chat-app .chat-list {
            height: 480px;
            overflow-x: auto;
        }

        .chat-app .chat-history {
            height: calc(100vh - 350px);
            overflow-x: auto;
        }
    }

    .border-top-right-radius{
        border-top-right-radius: 16px;
    }
    .border-bottom-right-radius{
        border-bottom-right-radius: 16px;
    }
</style>
<?php include 'header.php'; ?>

<div class="content-body">
    <nav class="d-none navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3 mt-3">
            <nav aria-label="breadcrumb mt-3">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page"> Chat</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbarSupportedContent">

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item ps-3 pe-2 d-flex align-items-center d-lg-none">
                        <a href="javascript:;" class="nav-link text-dark p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-dark"></i>
                                <i class="sidenav-toggler-line bg-dark"></i>
                                <i class="sidenav-toggler-line bg-dark"></i>
                            </div>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="container-fluid" style="background-color: #000000e0;"> -->
    <div class="container-fluid dark_cont_bg">


        <div class="row clearfix">

            <div class="col-lg-12 py-4">
                <div class="card chat-app" style="border-radius: 18px !important; ">
                    <div class="row">
                        <div class="col-md-4 pe-0">
                            <div id="plist" class="people-list dark-bg-still">
                                <div class="input-group">
                                    <div class="input-group search-area">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <span class="input-group-text"><a href=""><i class="fui-search text-primary fs-3"></i></a></span>
                                    </div>

                                </div>
                                <ul class="list-unstyled chat-list mt-2 mb-0">
                                    <li class="clearfix d-flex align-items-center my-1">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                        <div class="about">
                                            <div class="name light-text-still">Vincent Porter</div>
                                        </div>
                                    </li>
                                    <li class="clearfix active d-flex align-items-center my-1">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        <div class="about">
                                            <div class="name light-text-still">Aiden Chavez</div>
                                        </div>
                                    </li>
                                    <li class="clearfix d-flex align-items-center my-1">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                        <div class="about">
                                            <div class="name light-text-still">Mike Thomas</div>
                                        </div>
                                    </li>
                                    <li class="clearfix d-flex align-items-center my-1">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                        <div class="about">
                                            <div class="name light-text-still">Christian Kelly</div>
                                        </div>
                                    </li>
                                    <li class="clearfix d-flex align-items-center my-1">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                        <div class="about">
                                            <div class="name light-text-still">Monica Ward</div>
                                        </div>
                                    </li>
                                    <li class="clearfix d-flex align-items-center my-1">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                        <div class="about">
                                            <div class="name light-text-still">Dean Henry</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 ps-0">
                            <div class="chat">
                                <div class="chat-header dark-bg-still clearfix border-top-right-radius">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                            </a>
                                            <div class="chat-about">
                                                <h4 class="mb-0 light-text-still">Aiden Chavez</h4>
                                                <small class="light-text-still">Last seen: 2 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="align-items-center col-lg-5 d-flex gap-1 hidden-sm justify-content-lg-end">
                                            <a href="javascript:void(0);" class="me-2 light-text-still mb-0"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history dark-bg">
                                    <ul class="m-b-0">
                                        <li class="clearfix">
                                            <div class="message-data text-right ms-2">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                            </div>
                                            <div class="align-items-end d-flex flex-column">
                                                <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along?
                                                </div>
                                                <span class="message-data-time">10:10 AM, Today</span>
                                            </div>
                                        </li>
                                        <li class="clearfix d-flex">
                                            <div class="message-data text-left me-2">
                                                <img src="./assets/img/team-1.jpg" alt="avatar">
                                            </div>
                                            <div class="align-items-start d-flex flex-column">
                                                <div class="message my-message float-right">Are we meeting today?
                                                </div>
                                                <span class="message-data-time">10:12 AM, Today</span>
                                            </div>
                                        </li>
                                        <li class="clearfix d-flex">
                                            <div class="message-data text-left me-2">
                                                <img src="./assets/img/team-1.jpg" alt="avatar">
                                            </div>
                                            <div class="align-items-start d-flex flex-column">
                                                <div class="message my-message float-right">Project has been already finished and I have results to show you.
                                                </div>
                                                <span class="message-data-time">10:15 AM, Today</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="message-data text-right ms-2">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                            </div>
                                            <div class="align-items-end d-flex flex-column">
                                                <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along?
                                                </div>
                                                <span class="message-data-time">10:10 AM, Today</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message dark-bg clearfix border-bottom-right-radius">
                                    <div class="input-group mb-0">
                                        <!--<div class="input-group-prepend">-->
                                        <!--    <span class="input-group-text"><i class="fa fa-send"></i></span>-->
                                        <!--</div>-->
                                        <div class="input-group send-area">
                                            <input type="text" class="form-control" placeholder="Enter text here...">
                                            <span class="input-group-text">
                                                <a href="" id="openDocument"><i class="fa-solid fa-paperclip text-dark fs-5 me-2"></i>
                                                </a>
                                                <a href=""><i class="fa fa-paper-plane text-dark fs-5 ms-1"></i></a>

                                                <input type="file" id="fileInput" style="display: none;">
                                        </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>

<script>
        document.getElementById('openDocument').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('fileInput').click();
        });
    </script>



<?php include 'footer.php'; ?>