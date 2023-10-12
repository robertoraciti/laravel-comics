<section class="azure-sec">
    
    <div class="container">
        @foreach ($data['footer_images'] as $image)
            
        <div>
          <img class="azure-sec-img" src="{{$image['path']}}" alt="" srcset="" width="45" />
          <span>{{ $image['description'] }}</span>
        </div>
        @endforeach
    </div>
</section>
<footer class="footer">
    <div class="upper-footer container">
      <div>
        <h3>DC COMICS</h3>
        <ul>
            @foreach ($data['footer_links'] as $link)
            <li>{{ $link }}</li>     
            @endforeach
        </ul>
        <h3>SHOP</h3>
        <ul>
            @foreach ($data['footer_shops'] as $shop)
            <li>{{ $shop }}</li>     
            @endforeach
        </ul>
      </div>
      <div>
        <h3>DC</h3>
        <ul>
            @foreach ($data['footer_help_options'] as $help_option)
            <li>{{ $help_option }}</li>     
            @endforeach
        </ul>
      </div>
      <div>
        <h3>SITES</h3>
        <ul>
            @foreach ($data['footer_sites'] as $site)
            <li>{{ $site }}</li>     
            @endforeach
        </ul>
      </div>
      <div id="bg-logo">
      </div>
    </div>
    <section class="lower-footer">
      <div class="footer-contents container">
        <button>SIGN-UP NOW!</button>
        <div id="follow-us">
          <p>FOLLOW US</p>
          @foreach ($data['footer_icons'] as $icon)
            <img
            src="{{$icon['path']}}"
            alt=""
            srcset=""
            width="35"
          />
          @endforeach
        </div>
      </div>
    </section>
  </footer>


<style lang="scss" scoped>
    .azure-sec {
      background-color: #0282f9;
      height: 150px;
      margin-top: 30px;
    }
    .azure-sec div {
      z-index: 1;
      height: 100%;
      display: flex;
      justify-content: space-around;
      align-items: center;
      color: white;
  
    }
    .azure-sec-img {
      margin-right: 1rem;
      width: 50px;
      height: 60px;
    }

    .footer {
        background-image: url(/img/footer-bg.jpg);
  background-size: cover;
  position: relative;
    }
    .upper-footer {
    display: flex;
    color: white;
    padding: 30px 0;
    }
    
    .upper-footer div {
        width: 150px;
    }

    .upper-footer ul {
        list-style-type: none;
      margin: 0;
      padding: 0;
      line-height: 20px;
    }
    
    .upper-footer li {
        color: gray;
    }

    #bg-logo {
    height: 460px;
    width: 500px;
    background-image: url(/img/dc-logo-bg.png);
    background-size: cover;
    position: absolute;
    left: 55%;
    bottom: 20%;
    overflow: hidden;
  }

.lower-footer {
    background-color: #303030;
    height: 95px;
}
.footer-contents {
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
#follow-us {
    display: flex;
    align-items: center;
    color: #0282f9;
}
#follow-us * {
margin-right: 1rem;
}

.lower-footer button {
      border: 2px solid #0282f9;
      background-color: #303030;
      color: white;
      padding: 1rem;
}
    </style>