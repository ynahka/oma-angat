<style type="text/css">
    .Iclass {
        font-size: 1.3rem;
        cursor: pointer;
        font-weight: 500;
    }

    ul.pagination {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    ul.pagination li {
        cursor: pointer;
        display: inline;
        color: #3a4651 !important;
        font-weight: 600;
        padding: 4px 8px;
        border: 1px solid #CCC;
    }

    .pagination li:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .pagination li:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    ul.pagination li:hover {
        background-color: #3a4651;
        color: white !important;
    }

    .pagination .active {
        background-color: #3a4651;
        color: white !important;
    }

    .table thead th,
    .table th {
        background-color: #9e9e9e !important;
    }

    .swal2-icon {
        margin-bottom: 10px !important;
    }

    .modalpaddingnew {
        padding-left: 10px;
        margin-bottom: 10px;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card" style="margin-bottom: 0px;">
            <div class="card-body" style="padding-top: .5rem; padding-bottom: .5rem;">
                <div class="row page-titles rowpageheaderpadd" style="padding-bottom: 0px;">
                    <div class="col-md-6 col-6 align-self-center" style="padding-left:10px;">
                        <h3 class="mb-0 mt-0 headerfontfont text-themecolor" style="font-weight: 600;">CHATS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding: 0px; margin-top: 15px;">
    <div class="row">
        <div class="col-12">
            <div class="card m-0">
                <!-- .chat-row -->
                <div class="chat-main-box">
                    <!-- .chat-left-panel -->
                    <div class="chat-left-aside">
                        <div class="open-panel"><i class="ti-angle-right"></i></div>
                        <div class="chat-left-inner">
                            <div class="form-material">
                                <input class="form-control p-3" type="text" placeholder="Search Coversation" id="txtsearchcontacts">
                            </div>
                            <ul class="chatonline style-none ">
                                <div id="dsplychatusers"></div>
                                <li class="p-3"></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .chat-left-panel -->
                    <!-- .chat-right-panel -->
                    <div class="chat-right-aside">
                        <div class="chat-main-header">
                            <div class="p-3 border-bottom">
                                <h3 class="box-title">Chat Message</h3>
                            </div>
                        </div>
                        <div class="chat-rbox">
                            <ul class="chat-list p-4">
                                <div id="dsplychats">
                                    <h6 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> Select Conversation . . . </i></h6>
                                </div>
                            </ul>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="txtuser_id" id="txtuser_id">
                                    <input type="hidden" name="txtsendtoID" id="txtsendtoID">
                                    <input type="hidden" name="txtadmin" id="txtadmin">
                                    <textarea placeholder="Type your message here . . . " class="form-control b-0" id="txtmessage"></textarea>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-info btn-circle btn-lg" onclick="sendbutton();"><i class="fa fa-paper-plane"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .chat-right-panel -->
                </div>
                <!-- /.chat-row -->
            </div>
        </div>
    </div>
</div>

<?php
include("chat/script.php");
include("chat/modal.php");
?>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="../admin/js/jquery.slimscroll.js"></script>
<script src="../admin/js/chat.js"></script>
<script src="../admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script src="../admin/assets/plugins/Chart.js/Chart.min.js"></script>