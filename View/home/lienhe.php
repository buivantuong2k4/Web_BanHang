<div class="main_sp">
<section class="container ">
    <div class="map-container">
    <div class="heading map-td">
      
        <h2>Vị trí </h2>
    </div>
<div class="map-content">
    <div class="map" id="map"></div>
    <div class="map-title">
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Thông tin liên lạc</h3>
                <p class="mb-0 font-weight-bold">Địa chỉ</p>
                <p class="mb-4"> Thống Nhất, Phường 10, Thành phố Vũng Tàu, Bà Rịa - Vũng Tàu</p>
  
                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+1 232 3205 243</a></p>
  
                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">youremail@gmail.com</a></p>
              </div>
    </div>
              
   

</div>
    </div>
</section>
</div>
<script>
    function initMap() {
        var location = {lat: 37.7749, lng: -122.4194}; // Thay thế với tọa độ địa chỉ mong muốn

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: location
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
