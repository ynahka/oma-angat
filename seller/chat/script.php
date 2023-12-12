<script type="text/javascript">
    $(function(){
        $("#txtsearchcontacts").keyup(function(e){
            if($('#txtsearchcontacts').val() == ""){
                displaychatusers()
            } else {
                displaychatusers();
            }
        });
        displaychatusers();
    });

    function displaychatusers(){
        var srchprod = $("#txtsearchcontacts").val();
        $.ajax ({
            type: 'POST',
            url: 'chat/class.php',
            data: 'srchprod=' + srchprod + '&form=displaychatusers' ,
            success: function(data) {
                $("#dsplychatusers").html(data);
            }
        })
    }

    function displaychats(user_id, sendtoID, usertype){
        $("#txtmessage").val("");
        $.ajax ({
            type: 'POST',
            url: 'chat/class.php',
            data: 'user_id=' + user_id + '&sendtoID=' + sendtoID + '&usertype=' + usertype + '&form=displaychats' ,
            success: function(data) {
                $("#dsplychats").html(data);
                $("#txtuser_id").val(user_id);
                $("#txtsendtoID").val(sendtoID);
                $("#txtadmin").val(usertype);
            }
        })

        // $.ajax ({
        //     type: 'POST',
        //     url: 'chat/class.php',
        //     data: 'id=' + id + '&user_id=' + user_id + '&form=fncupdatestatus' ,
        //     success: function(data) {
        //         // alert(data)
        //     }
        // })
    }

    function sendbutton(){
        var textmessage = $("#txtmessage").val();
        var textuser_id = $("#txtuser_id").val();
        var textsendtoID = $("#txtsendtoID").val();
        var textadmin = $("#txtadmin").val();
        if(textuser_id != ""){
            if(textmessage != ""){
                $.ajax ({
                    type: 'POST',
                    url: 'chat/class.php',
                    data: 'textmessage=' + textmessage + '&textuser_id=' + textuser_id + '&textsendtoID=' + textsendtoID + '&textadmin=' + textadmin + '&form=sendbutton' ,
                    success: function(data) {
                        displaychats(textuser_id, textsendtoID, textadmin);
                        displaychatusers();
                        $("#txtmessage").val("");
                    }
                })
            } else{
                alert("Please enter a message");
            }
        } else{
            alert("Please select a conversation.");
        }
    }
</script>