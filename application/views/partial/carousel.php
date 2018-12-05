 
      
      <!-- BUAT CAROUSEL -->
      <div class="carousel slide" id="mycarousel" style="height: 100%; float: left;">
        
        <!-- buat indikator -->
        <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
          <li data-target="#mycarousel" data-slide-to="1"></li>
          <li data-target="#mycarousel" data-slide-to="2"></li>
          <li data-target="#mycarousel" data-slide-to="3"></li>
        </ol>

        <!-- buat wrapper per slide -->
        <div class="carousel-inner">
          <!-- untuk per slide -->
          <div class="item active">
            <img src="<? echo base_url().'assets/gambar/w1.jpg' ?>" style="width: 100%; height: 100%;">
            <div class="carousel-caption">
              <h3>HAHAHA</h3>
              <p>hihihihis</p>
            </div>
          </div>
          <!-- untuk per slide -->
          <div class="item">
            <img src="<? echo base_url().'assets/gambar/w8.jpg' ?>" width="100%" heigsht="100%">
            <div class="carousel-caption">
              <h3>HAHAHA</h3>
              <p>hihihihis</p>
            </div>
          </div>
          <!-- untuk per slide -->
          <div class="item">
            <img src="<? echo base_url().'assets/gambar/w10.jpg' ?>" width="100%" height="100%">
            <div class="carousel-caption">
              <h3>HAHAHA</h3>
              <p>hihihihis</p>
            </div>
          </div>
          <!-- untuk per slide -->
          <div class="item">
            <img src="<? echo base_url().'assets/gambar/w7.jpg' ?>" width="100%" height="100%">
            <div class="carousel-caption">
              <h3>HAHAHA</h3>
              <p>hihihihis</p>
            </div>
          </div>
        </div>

        <!-- pengontrol carousel -->
        <a href="#mycarousel" class="left carousel-control" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#mycarousel" class="right carousel-control" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
