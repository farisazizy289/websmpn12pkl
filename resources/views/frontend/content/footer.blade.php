<div class="footer-area-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <a href="/">
                        @if (@$footer->logo == NULL)
                            <img class="img-responsive" src="{{asset('Assets/Frontend/img/logo-footer.png')}}" alt="logo">
                        @else
                            <img class="img-responsive" src="{{asset('storage/images/logo/' .$footer->logo)}}" alt="logo">
                        @endif
                    </a>
                    <div class="footer-about">
                        <p> {{@$footer->desc}} </p>
                    </div>
                    <ul class="footer-social">
                        <li><a href="{{'https://www.youtube.com/results?search_query=smpn+12+pekalongana',@$footer->youtube}}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="{{'https://www.facebook.com/profile.php?id=61559812045661',@$footer->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{'https://www.instagram.com/smpn12pekalongan/',@$footer->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h3>Informasi</h3>
                    <ul class="corporate-address">
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{@$footer->telp}}"> {{@$footer->telp}}</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{@$footer->email}}</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Jl. Pantai Sari II, Panjang Baru, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141</li>
</ul>
                    </ul>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h3></h3>
                    <ul class="flickr-photos">
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/logopklsedang.png')}}" alt="flickr"></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-area-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <p>&copy; {{date('Y')}} <a href="" target="_blank">SMPN 12 Pekalongan</a> All Rights Reserved.</p>
            </div>
            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="payment-method">
                    <li>
                        <a href="#"><img alt="payment-method" src="img/payment-method1.jpg"></a>
                    </li>
                    <li>
                        <a href="#"><img alt="payment-method" src="img/payment-method2.jpg"></a>
                    </li>
                    <li>
                        <a href="https://theidioms.com"><img alt="Idioms" src="img/payment-method3.jpg"></a>
                    </li>
                    <li>
                        <a href="#"><img alt="payment-method" src="img/payment-method4.jpg"></a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
