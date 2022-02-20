<link href="https://axlewebtech.com/clients/chatbots/axlewebtech/scripts/chatbot.css" rel="stylesheet" type="text/css">
<script src="https://axlewebtech.com/clients/chatbots/axlewebtech/scripts/webchat.js"></script>
<style type="text/css">
.chatprompt {
    position: fixed;
    right: 47px;
    bottom: 118px;
    z-index: 100;
    height: 50px;
    width: 56px;
    cursor: pointer;
}
.chatprompt div{
display: none;
}
.chatprompt img {
    height: 86px;
    width: 70px;
    border-radius: 0px;
}

</style>


<script>
	var  base_url = '<?php echo url('/')?>';
	var link = base_url+'/assets/frontassets/images/4.png';
    bot_Init(
        '',
        true,
        400,
        500,
       	link,
        'https://axleweb.tech/chatbotx?project=syam-ihandlerbot-cwqp'
    );
</script>
