
  
<footer>

    <div class='footer-top'>
        <div class="container">

            @include('common.banner-icon')
        </div>
    </div>


    <div class='footer-middle'>

        <div class="container">
  
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

        <a class='btn cta'>
            Sign-up now!
        </a>
          <div class='social-links'>

            <h3>Follow Us</h3>
    
            <div class="icon-box-container">
    
                <a v-for='(link, index) in links' :key="index" class="icon-box" href="link.url">
    
                    <font-awesome-icon :icon="['link.family', 'link.name']" />
                    <!-- <i :class='link.family+" "+link.name'></i> -->
                </a>
            </div>
        </div>
        </div>
      </div>

</footer>