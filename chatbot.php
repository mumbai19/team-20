<html>

<body bgcolor="black">

<script type="text/javascript">
    /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
(function(d, m){
           var kommunicateSettings = {"appId":"1c12616223f5cff7e3926090b28d4b9bc","conversationTitle":"Eve","popupWidget":true,"automaticChatOpenOnNavigation":true,
               "onInit": function() {
                   var style = document.createElement('style');
                   var heightAndWidth = ".change-kommunicate-iframe-height{height:390px!important;width: 350px!important;}";
                   var classSettings = ".change-kommunicate-iframe-height{box-shadow: rgba(0, 0, 0, 0.3) 0px 1.5rem 2rem!important;max-height:calc(100% - 30px) !important;}" + heightAndWidth;
                   style.type = 'text/css';
                   style.innerHTML = classSettings;
                   document.getElementsByTagName('head')[0].appendChild(style);

                   KommunicateGlobal.document.getElementById('mck-sidebox-launcher').addEventListener('click',function(){ var testClick = parent.document.getElementById("kommunicate-widget-iframe"); testClick.classList.add("change-kommunicate-iframe-height"); });

                   KommunicateGlobal.document.getElementById('km-chat-widget-close-button').addEventListener('click',function(){ var testClick = parent.document.getElementById("kommunicate-widget-iframe"); testClick.classList.remove("change-kommunicate-iframe-height"); });
               }
           };
           var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
           s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
           var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
           window.kommunicate = m; m._globals = kommunicateSettings;
       })(document, window.kommunicate || {});



 
</script>
</body>
</html>