<footer>
    <div class="inner-wrapper">
        <div class="footer-blocks">
            <div class="block">
                <div class="title">Tallentor <span>Jobs</span></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nostrum soluta facilis fuga quam tenetur.</p>
                <ul class="contacts">
                    <li>
                        <a href="tel:+94777000000"><i class="bi bi-telephone-fill"></i>+94 777000000</a>
                    </li>
                    <li>
                        <a href="mailto:info@eduknow.com"><i class="bi bi-envelope-fill"></i>info@eduknow.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-geo-alt-fill"></i>518/ B C Avenue, <br>London</a>
                    </li>
                </ul>
            </div>
            <div class="block">
                <div class="subtitle">Additional Links</div>
                <ul class="additional-links">
                    <li><a href="#">Login your account</a></li>
                    <li><a href="#">Register with new account</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                </ul>
            </div>
            <div class="block">
                <div class="subtitle">Newsletter</div>
                <p>You can trust us. we only send promo offers, not a single spam.</p>

                <form action="{{route('frontend.newsletter.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="input-group">
                        <input type="email" name="newsletter" class="form-control" placeholder="Type your Email" required>
                        <button type="submit" class="ns-submit">SUBSCRIBE</button>
                    </div>
                </form>

                <div class="subtitle">Follow Us</div>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="block">
                <div class="subtitle">About us</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>
            </div>
        </div>
        <div class="copyright">
            <span>Copyright © {{date('Y')}} All rights reserved</span>
            <span>Powered By Enspirer</span>
        </div>
    </div>
</footer>

