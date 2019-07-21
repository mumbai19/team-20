@include('UI.navbar')

<div class="container" style="padding:5%">

<form class="contact-form">
        <input type="text" placeholder="Your name">
        <input type="text" placeholder="Your e-mail">
        <input type="text" placeholder="Amount">
        <input type="" placeholder="Phone No">
        <input type="" placeholder="The cause you would like to donate for ?">
        
        
        <br><hr><br>
        <a href="{{ url('/print') }}" class="btn btn-dark">Donate</a>
</form>

</div>
@include('UI.footer')