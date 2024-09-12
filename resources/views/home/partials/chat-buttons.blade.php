<!-- resources/views/components/chat-buttons.blade.php -->

<style>
    .whatsapp-button {
        position: fixed;
        bottom: 50px;
        right: 20px;
        background-color: #25D366;
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-decoration: none;
        font-size: 2rem;
        /* Uncomment if you want bold text */
        /* font-weight: bold; */
        z-index: 9999;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .whatsapp-button i {
        font-size: 2rem;
    }
</style>

<!-- WhatsApp Button -->
<a href="https://wa.me/9779869711440?text=Hello%20I%20need%20support" target="_blank" class="whatsapp-button">
    <i class="fa-brands fa-whatsapp"></i>
    Chat with us
</a>

<!-- Facebook Chat Widget -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "391823150673887");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v12.0' // Ensure this matches the latest version or your specific version
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
